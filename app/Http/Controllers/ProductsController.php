<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function getProductPriceSum()
    {
        $response = Products::get()->sum('Price');

        return response()->json(["price_sum" => $response]);
    }

    public function getProductTable()
    {
        $getProductsList= Products::all();
        return view('layout.ProductTable',compact('getProductsList'));
    }



}
