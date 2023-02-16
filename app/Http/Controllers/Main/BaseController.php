<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\PageService;

class BaseController extends Controller
{
    public $service;

   public function __construct(PageService $service)
   {
      $this->service = $service;

   }

}
