<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($name)
    {
        $categories = Category::where('name','$name')->firstOrFail();
        return view('welcome', compact('categories'));
    }

}
