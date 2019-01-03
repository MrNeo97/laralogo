<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    public static function getName($param, $name)
    {
        return DB::table('categories')->where($param, $name)->get();
    }
}
