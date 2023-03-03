<?php

namespace App\Http\Controllers\Admin\UserSubjectClass;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\UserSubjectClassService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(UserSubjectClassService $service)
    {
        $this->service = $service;
    }
}
