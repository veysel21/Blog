<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function index(){
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.homepage');
    }
    public function articleCount(){
        return $this->hasMany('App\Models\Article','category_id','id')->count();
                                    //Bağlanan Model          //Bağlanan sütün          //Bağlanılan sütun
    }
}
