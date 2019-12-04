<?php

namespace App\Http\Controllers\Back;

use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Model
{
//    public function index(){
//        return view('back.dashboard');
//    }

    protected $table ='categories';
    protected $filliable =['id','name'];


}
