<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function displayHomePage(){
            $services= Service::all();
            $news= News::all();
            return view('index',['services'=>$services , 'news'=>$news]);

    }
    public function displayBlogPage() {
        return view('blog');
    }
}
