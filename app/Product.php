<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    public static function getValue($products)
    {
        foreach ($products as $product) {
            $category['category'][] = Category::find($product->category_id);
            $user['user'][] = User::find($product->user_id);
        }

        if (!empty($category)) {
            return $value = array_merge($category, $user);
        } else {
            return false;
        }

    }

    public static function Search($param, $name)
    {
        return DB::table('products')->where($param, $name)->get();
    }
}
