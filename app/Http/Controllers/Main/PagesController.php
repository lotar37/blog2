<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends BaseController
{
    public function museum()
    {
        $role = $this->role;
        $user = $this->user;
        $page = Page::all()->where('route_name','museum');
        return view("main.page",compact('role', 'user','page'));
    }
}
