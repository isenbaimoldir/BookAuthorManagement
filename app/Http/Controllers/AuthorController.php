<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors.index');
    }

    public function store(Request $request)
    {
        Author::create($request->all());

        return redirect()->route('authors.index');
    }
}