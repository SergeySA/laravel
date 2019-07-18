<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Services;
use App\Portfolio;
use App\People;

use DB;
use Mail;

class IndexController extends Controller
{

    public function execute(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $messages = [
                'required'=>':attribute обязательное поле',
                'name.max' => 'Максимально допустимое кол символов :attribute - :max',
                'email'=>':attribute должно соответствовать email адресу'
            ];
            $this->validate($request, [
                'name'=>'required|max:100',
                'email'=>'required|email',
                'text'=>'required'
            ], $messages);

            $data = $request->all();
            Mail::send('site.email', ['data'=>$data], function($message) use ($data){
                 $mail_admin = env('MAIL_ADMIN');

                 $message->from($data['email'], $data['name']);
                 $message->to($mail_admin)->subject('Question');

            });
                return redirect()->route('home')->with('status', 'Email is sendw');

        }

        $pages = Page::all();
        $portfolios = Portfolio::get(array('name', 'filter', 'images'));
        $services = Services::where('id', '<', '100')->get();
        $peoples = People::take(3)->get();
//        dump($portfolios);
        //geting all distinct filters from table portfolios
        $tags = DB::table('portfolios')->distinct()->pluck('filter');

        $menu = array();
        foreach ($pages as $page) {
            $item = ['title'=>$page->name, 'alias'=>$page->alias];
            array_push($menu, $item);
        }

        $item = ['title'=>'Services', 'alias'=>'service'];
        $menu[] = $item;

        $item = ['title'=>'Portfolio', 'alias'=>'portfolio'];
        $menu[] = $item;

        $item = ['title'=>'Team', 'alias'=>'team'];
        $menu[] = $item;

        $item = ['title'=>'Contact', 'alias'=>'contact'];
        $menu[] = $item;

//    \mail("captain_super1@mail.ru", "My Subject", "Line 1\nLine 2\nLine 3");
        return view('site.index', [
                                            'menu'=>$menu,
                                            'pages'=>$pages,
                                            'portfolios'=>$portfolios,
                                            'services'=>$services,
                                            'peoples'=>$peoples,
                                            'tags'=>$tags
                                        ]);
    }
}
