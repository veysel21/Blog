<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Back\Dashboard;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Dashboard::all();

        return view('back.categories.index',compact('categories'));

    }
}
