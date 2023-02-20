<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\HomeworkService;
use App\Service\PostService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(HomeworkService $service)
    {
        $this->service = $service;
    }
}
