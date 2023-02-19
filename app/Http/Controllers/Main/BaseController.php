<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\MainService;

class BaseController extends Controller
{
    public $service;

   public function __construct(MainService $service)
   {
      $this->service = $service;
   }
}
