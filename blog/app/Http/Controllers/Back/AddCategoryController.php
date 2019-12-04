<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Back\Dashboard;
use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    public function index()
    {
        return view('back.add_categories.index');
    }

    public function create(Request $request)
    {
        $new = new Dashboard();
        $new->name = $request->fname;
        $new->slug = $request->fname;
        $new->save();
        return view('back.add_categories.index');
    }
}
