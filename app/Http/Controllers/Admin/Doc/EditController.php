<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Models\Doc;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Doc $doc)
    {
        return view('admin.docs.edit', compact('doc'));
    }
}
