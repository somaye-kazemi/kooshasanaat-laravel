<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use function Sodium\randombytes_uniform;

class NewsController extends Controller
{
    public function getAdminNews(){
        return News::all();

    }
    public function getNews($id){

    }
    public function createNews(){
        News::create([
        "date"=>request("date"),
        "text"=>request("text")
            ]);
        return redirect("/admin/news");
    }
    public function updateNews($id){

    }
    public function deleteNews($id){

    }
    public function displayAdminNews(){
        return view("/admin/news",['news'=>$this->getAdminNews()]);
    }
    public function displayCreateNews(){
        return view("/admin/create_news");
    }

    //
}
