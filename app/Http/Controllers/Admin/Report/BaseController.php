<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Service\ReportService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(ReportService $service)
    {
        $this->service = $service;
    }
}
