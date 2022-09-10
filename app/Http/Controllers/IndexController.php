<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function displayHomePage(){
            $services= Service::all();
            $shop= Shop::all();
            return view('index',['services'=>$services , 'shop'=>$shop]);
            echo "salam";
            echo "salam";
            echo "salam";
            echo "salam";
            echo "salam";
    }
    public function displayshopPage() {
        return view('shop');
    }

    public function displayBlogPage() {
        return view('blog');
    }

    public function displayAdminPanel(){
        return view("admin/index");
    }
}
