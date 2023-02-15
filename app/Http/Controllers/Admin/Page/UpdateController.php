<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Page $page)
    {
        // TODO: Implement __invoke() method.
        $data = $request->validated();
//        dd($data);
        $this->service->update($data, $page);
        $pages = Page::all();
        return view('admin.pages.index',compact("pages"));

    }
}
