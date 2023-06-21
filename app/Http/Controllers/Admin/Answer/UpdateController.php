<?php

namespace App\Http\Controllers\Admin\Answer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Answer\UpdateRequest;
use App\Models\Answer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Answer $answer)
    {

        $data = $request->validated();
        $this->service->update($data, $answer);

        return redirect()->route("admin.answer.index");
    }
}
