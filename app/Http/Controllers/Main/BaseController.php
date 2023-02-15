<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $role;
    public $user;
   public function __construct()
   {
       if(is_null(auth()->user())){
           $this->role = 2;
           $this->user = "";
       }else{
           $this->role = auth()->user()->role;
           $this->user = auth()->user()->name;
       }

   }

}
