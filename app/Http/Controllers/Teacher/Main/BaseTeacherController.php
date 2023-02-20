<?php

namespace App\Http\Controllers\Teacher\Main;

use App\Http\Controllers\Controller;
use App\Service\HomeworkService;
use Illuminate\Http\Request;

class BaseTeacherController extends Controller
{
    public $service;

   public function __construct(HomeworkService $service)
   {
      $this->service = $service;
   }
}
