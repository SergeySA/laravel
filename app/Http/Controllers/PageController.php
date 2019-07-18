<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use View;

class PageController extends Controller
{
    /**
     * @param $alias
     * @return View
     */
    public function execute($alias)
    {
        if (!$alias){
            abort(404);
        }
        if (view()->exists('site.page')) {
            $page = Page::where('alias', strip_tags($alias))->first();
            $data = [
                'title'=>$page->title,
                'page'=>$page
            ];
            return view('site.page', $data);
        } else {
            abort(404);
        }
    }
}
