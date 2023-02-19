<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Service\MainService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(MainService $service)
    {
        $this->service = $service;

    }
}
