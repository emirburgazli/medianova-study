<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function GetCategoryName() {

        $kategoriler = Category::all();

        return view('welcome' , compact('kategoriler'));
    }


}
