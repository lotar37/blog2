<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
   public function __construct()
   {
       if(is_null(auth()->user())){
           $role = 2;
           $user = "";
       }else{
           $role = auth()->user()->role;
           $user = auth()->user()->name;
       }

   }

}
