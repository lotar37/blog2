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
        return is_null(auth()->user()) ? 2 : auth()->user()->role;
    }
}
