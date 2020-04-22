<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{
    public function getCategoryName()
    {
        $categoryList = Category::all();

        return view('welcome', compact('categoryList'));
    }


}
