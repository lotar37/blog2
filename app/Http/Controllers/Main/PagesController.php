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
    public function teachers()
    {
         return $this->pager("teachers");
    }
    public function regim()
    {
         return $this->pager("regim");
    }
    public function contacts()
    {
         return $this->pager("contacts");
    }
   public function reports()
    {
         return $this->pager("reports");
    }
   public function about()
    {
         return $this->pager("about");
    }
   public function preschool()
    {
         return $this->pager("preschool");
    }
   public function extcurr()
    {
         return $this->pager("extcurr");
    }
   public function studyplan()
    {
         return $this->pager("studyplan");
    }
   public function patriarh()
    {
         return $this->pager("patriarh");
    }
   public function advice()
    {
         return $this->pager("advice");
    }
   public function theaters()
    {
         return $this->pager("theaters");
    }

    protected function pager($name){
        $role = $this->service->getRole();
        $user = $this->service->getUser();;
        $page = Page::all()->where('route_name',$name)->first();

        return view("main.page",compact('role', 'user','page'));
    }

}