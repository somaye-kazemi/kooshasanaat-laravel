<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function getAllServices()
    {
        return Service::all();

    }

    public function getService($id)
    {

    }

    public function displayCreateService()
    {
        return view("admin.create_service");
    }

    public function createService(Request $request)
    {
//        dd($_POST);
//        dd($_POST["title"]);
//        dd(request()->all());
//        dd(request("description"));

//        $service = new Service();
//        $service->setTitle(request("title"));
//        $service->setDescription(request("description"));
//
//        $service->save();




        $valid_data = $request->validate([
            "title" => ["required", "max:30"],
//            'required|max:255',
            "description" => ["required"],

        ]);
        $filename="";
//        dd($request->file('image')->getClientOriginalName());
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('Y-m-d-H-i-s').$file->getClientOriginalName();
            $file->move(public_path('images/services'), $filename);
        }

        Service::create([
            "title" => $valid_data["title"],
            "description" => $valid_data["description"],
            "image"=>$filename,
        ]);
        return redirect("/admin/services");
    }

    public function displayUpdateService(Service $service)
    {

        return view("admin.edit_service", ["service" => $service]);
    }

    public function updateService(Service $service, Request $request)
    {
        $valid_data = $request->validate([
            "title" => ["required", "max:30"],
//            'required|max:255',
            "description" => ["required"],
        ]);
        $service->update([
            "title" => $valid_data["title"],
            "description" => $valid_data["description"]
        ]);
        return redirect("/admin/services");
    }

    public function deleteService(Service $service)
    {
//        $service=Service::findOrFail($id);
        $service->delete();
        return back();
    }

    public function displayAllServices()
    {
        return view("admin/services", ['services' => $this->getAllServices()]);
    }

}
