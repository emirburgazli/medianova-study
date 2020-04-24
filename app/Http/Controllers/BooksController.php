<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function GetAllBooks()
    {
        $getBooksList = Books::all();
        return view('layout.Books',compact('getBooksList'));;
    }


}
