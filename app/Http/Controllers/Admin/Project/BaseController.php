<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\ProjectService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(ProjectService $service)
    {
        $this->service = $service;
    }
}
