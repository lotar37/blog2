<?php

namespace App\Service;

use App\Models\Page;
use App\Models\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MainService extends BaseService
{
    public function viewModel($table, $id){
        $data = [];
        $data['table'] = $table;
        $data['forign_id'] = $id;
        View::Create($data);
    }
}
