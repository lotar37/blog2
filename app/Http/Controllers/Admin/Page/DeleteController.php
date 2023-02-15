<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Page $page)
    {
        // TODO: Implement __invoke() method.
        $page->delete();
        return redirect()->route('admin.page.index');
    }
}
