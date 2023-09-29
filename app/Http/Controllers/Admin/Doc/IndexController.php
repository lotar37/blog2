<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Models\Doc;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $docs = Doc::all()->sortDesc();
        return view('admin.docs.index',compact("docs"));
    }
}
