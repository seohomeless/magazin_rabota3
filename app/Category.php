<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    static public function menuItems()
    {
        return self::all();
    }
}
