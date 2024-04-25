<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{   public function alldata()
    {
    return DB::table('masterdata')->get();
    }

    public function addData($data)
    {
        return DB::table("user")->insert($data);
    }
}
    

