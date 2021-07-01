<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product as product;

class productController extends Controller
{

    function home()
    {
        return view("home", []);
    }

    function getProducts()
    {
        $data = product::getAll();

        return $data;
    }
}
