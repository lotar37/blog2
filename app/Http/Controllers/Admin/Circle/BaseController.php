<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\CircleService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(CircleService $service)
    {
        $this->service = $service;
    }
}
