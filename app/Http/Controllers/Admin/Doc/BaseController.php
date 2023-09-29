<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Service\DocService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;
    public function __construct(DocService $service)
    {
        $this->service = $service;
    }
}
