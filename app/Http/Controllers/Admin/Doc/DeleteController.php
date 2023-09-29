<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Models\Doc;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Doc $doc)
    {
        // TODO: Implement __invoke() method.
        $doc->delete();
        return redirect()->route('admin.doc.index');
    }
}
