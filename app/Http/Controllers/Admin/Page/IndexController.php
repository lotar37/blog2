<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $pages = Page::all();
        foreach ($pages as $page) {
            if(!Route::has("main.".$page->route_name)) {
                $page->route_name = 0;
            }
        }
        return view('admin.pages.index',compact("pages"));
    }
}
