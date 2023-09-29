<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doc\UpdateRequest;
use App\Models\Doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Doc $doc)
    {
        // TODO: Implement __invoke() method.

        $data = $request->validated();
//        dd($data);
        $doc = $this->service->update($data, $doc);
        return view('admin.docs.show', compact('doc'));
    }
}
