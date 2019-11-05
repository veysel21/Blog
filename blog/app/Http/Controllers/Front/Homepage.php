<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;
class Homepage extends Controller
{
    public function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->get();
        $data['categories']=Category::orderBy('name','ASC')->get();
        return view('front.homepage',$data);
    }
    public function single($category, $slug){
        $category=Category::whereSlug($category)->first() ?? abort(403,'Böyle bir yazı bulunamadı.');
        $article=Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Böyle bir yazı bulunamadı.');
        $article->increment('hit');
        $data['article']=$article;
        $data['categories']=Category::orderBy('name','ASC')->get();
        return view('front.single',$data);


    }
}
