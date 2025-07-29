<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        // TODO: Implement __invoke() method
        $data = $request->validated();
//       dd($data);
        $date = Carbon::parse($data["date"])->format('d-m-Y');
        $data["slug"] = Str::slug($data["title"]."-".$date);

        $this->service->store($data);
        return redirect()->route("admin.post.index");
    }
}
