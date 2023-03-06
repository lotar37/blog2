<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Service\PageService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(PageService $service)
    {
        $this->service = $service;

    }
}
