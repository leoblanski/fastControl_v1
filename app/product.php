<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    public static function getAll()
    {
        $query = product::query();

        $product = $query->get()->toArray();
        return $product;
    }
}
