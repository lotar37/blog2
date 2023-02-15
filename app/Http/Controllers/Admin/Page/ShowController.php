<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Page $page)
    {
        // TODO: Implement __invoke() method.
        return view('admin.page.show',compact("page"));
    }
}
