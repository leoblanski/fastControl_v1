<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';

    public static function getAll()
    {
        $query = customer::query();
        return $query;
    }

    public static function scopeActives($query)
    {
        $query->where("customer.active", 1);

        return $query;
    }

    public static function scopeFilter($query, $filters)
    {
        if (isset($filters['search']) && $filters['search']) {
            $query->where("customer.name", "like", '%' . $filters['search'] . '%');
        };

        return $query;
    }
}
