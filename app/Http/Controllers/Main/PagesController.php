<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends BaseController
{
    public function uniform()
    {
         return $this->pager("uniform");
    }
    public function museum()
    {
         return $this->pager("museum");
    }
    public function khram_history()
    {
         return $this->pager("khram_history");
    }
    public function khram_chtenie()
    {
         return $this->pager("khram_chtenie");
    }
    public function khram_docs()
    {
         return $this->pager("khram_docs");
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
   public function admission()
    {
         return $this->pager("admission");
    }
   public function requisites()
    {
         return $this->pager("requisites");
    }
   public function management()
    {
         return $this->pager("management");
    }
   public function temple_schedule()
    {
         return $this->pager("temple_schedule");
    }
   public function projects()
    {
         return $this->pager("projects");
    }
   public function innovations()
    {
         return $this->pager("innovations");
    }
   public function gia()
    {
         return $this->pager("gia");
    }
   public function letopis()
    {
         return $this->pager("letopis");
    }
  public function announcement()
    {
         return $this->pager("announcement");
    }
    public function preschool()
    {
        $name = 'preschool';
        $page = Page::all()->where('route_name',$name)->first();
        $tag = Tag::find(6);
        $posts3 = $tag->posts->sortByDesc('date')->take(3);
        return view("main.preschool",compact('page','posts3'));
    }

    protected function pager($name){
        $role = $this->service->getRole();
        $user = $this->service->getUser();;
        $page = Page::all()->where('route_name',$name)->first();

        return view("main.page",compact('role', 'user','page'));
    }

}
