<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function getAllServices(){
       return Service::all();

    }
    public function getService($id){

    }
    public function createService(){
//        dd($_POST);
//        dd($_POST["title"]);
//        dd(request()->all());
//        dd(request("description"));

//        $service = new Service();
//        $service->setTitle(request("title"));
//        $service->setDescription(request("description"));
//
//        $service->save();
        Service::create([
            "title"=>request("title"),
            "description"=>request("description")
        ]);
        return redirect("/admin/services");
    }
    public function updateService($id){

    }
    public function deleteService($id){

    }
    public function displayAllServices(){
        return view("admin/services", ['services'=>$this->getAllServices()]);
    }
    public function displayCreateService(){
//        dd("test");

        return view("admin/create_service");
    }
}
