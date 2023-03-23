<?php

namespace App\Service;

use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BaseService
{
    public function getUser()
    {
        return is_null(auth()->user()) ? "" : auth()->user()->name;
    }

    public function getUserId()
    {
        return is_null(auth()->user()) ? "" : auth()->user()->id;
    }

    public function getRole()
    {
        return is_null(auth()->user()) ? 4 : auth()->user()->role;
    }
    public function getClassesColors(){
        $data = [];
        $data[1] = "success";
        $data[2] = "warning";
        $data[3] = "success";
        $data[4] = "danger" ;
        $data[5] = "secondary";
        $data[6] = "warning";
        $data[7] = "primary";

        return $data;

    }
}
