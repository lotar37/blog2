<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doc\StoreRequest;
use App\Models\Doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        // TODO: Implement __invoke() method
        $data = $request->validated();
//       dd($data);
        $this->service->store($data);
        return redirect()->route("admin.doc.index");
    }
}
