<?php

namespace App\Http\Controllers\Admin\Answer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\AnswerService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(AnswerService $service)
    {
        $this->service = $service;
    }
}
