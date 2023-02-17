<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends BaseController
{
    public function museum()
    {
         return $this->pager("museum");
    }
    public function regim()
    {
         return $this->pager("regim");
    }
    protected function pager($name){
        $role = $this->service->getRole();
        $user = $this->service->getUser();;
        $page = Page::all()->where('route_name',$name)->first();

//        dd($page);
        return view("main.page",compact('role', 'user','page'));
    }
}
