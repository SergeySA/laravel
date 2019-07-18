<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Page;

class PagesAddController extends Controller
{
    public function execute(Request $request)
    {
        if($request->isMethod('post'))
        {
            $input = $request->except('_token');

            $massages = [
                'required' => 'Поле :attribute не заполнео',
                'unique' => 'Поле :attribute не уникально'
            ];

            $validator = Validator::make($input, [
                'name'=>'required|max:200',
                'alias'=>'required|unique:pages|max:200',
                'text'=>'required'
            ], $massages);

            if($validator->fails()){
                return redirect()->route('pageadd')->withErrors($validator)->withInput();
            }

            if ($request->hasFile('images'))
            {
                $file = $request->file('images');

                $file_name = $file->getClientOriginalName();
                $user_id = $request->user()->id;
                $file_path = $file->storeAs(''.$user_id, ''.$file_name, 'local2');

                $input['images'] = $user_id.'/'.$file_name;
//                dd($file_path);
//                $file_path = $file->store(''.$request->user()->id, 'local2');
//                $file_path = $file->move(public_path('assets/img/'.$request->user()->id), $input['images']);

//                $page = new Page($input);
//                либо
                $page = new Page();
                $page->fill($input);
//                (для доступа к не fillable свойствам модели $page->unguard();)
                if($page->save()){
                    return redirect('admin')->with('status', 'Новая страница добавлена');
                }
            }

        }
        if(view()->exists('admin.page_add')){
            $data = ['title'=>'Новая страница'];
            return view('admin.page_add', $data);
        }
        abort(404);
    }
}
