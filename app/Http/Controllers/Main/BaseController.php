<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Service\HomeworkService;
use App\Service\MainService;

class BaseController extends Controller
{
    public $service;
    public $home_service;

   public function __construct(MainService $service, HomeworkService $home_service)
   {
      $this->service = $service;
      $this->home_service = $home_service;
   }

   public function addImageLinkInPostsIfNull($posts){

   }
}
