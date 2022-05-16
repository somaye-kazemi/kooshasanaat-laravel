<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getAllServices(){
        $services= Service::all();
        dd($services);
    }
    public function getService($id){

    }
    public function createService(){

    }
    public function updateService($id){

    }
    public function deleteService($id){

    }
}
