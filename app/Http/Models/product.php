<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    public static function getAll()
    {
        $query = product::query();
        return $query;
    }

    public static function scopeActives($query)
    {
        $query->where("product.active", 1);

        return $query;
    }

    public static function scopeFilter($query, $filters)
    {
        if (isset($filters['search']) && $filters['search']) {
            $query->where("product.name", "like", '%' . $filters['search'] . '%');
        };

        return $query;
    }
}
