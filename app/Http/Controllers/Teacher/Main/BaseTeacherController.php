<?php

namespace App\Http\Controllers\Teacher\Main;

use App\Http\Controllers\Controller;
use App\Service\TeacherService;
use Illuminate\Http\Request;

class BaseTeacherController extends Controller
{
    public $service;

   public function __construct(TeacherService $service)
   {
      $this->service = $service;
   }
}
