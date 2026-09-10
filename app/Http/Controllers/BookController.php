<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $semuaBuku = Book::with('categories')->orderBy('judul')->get();
    }
}
