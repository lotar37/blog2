<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Page $page)
    {
        // TODO: Implement __invoke() method.
         return view('admin.pages.edit', compact('page'));
    }
}
