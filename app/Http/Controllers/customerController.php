<?php

namespace App\Http\Controllers;

use App\Http\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{

    function home()
    {
        return view("home", []);
    }

    function getCustomers()
    {
        $filters['search'] = request('search');
        $data = product::getAll()
            ->filter($filters)
            ->get()
            ->toArray();

        return $data;
    }
}
