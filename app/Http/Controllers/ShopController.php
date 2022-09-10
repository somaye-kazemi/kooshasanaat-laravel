<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getAllShop()
    {
        return Shop::all();

    }

    public function displayCreateShop()
    {
        return view("admin.create_shop");
    }


    public function createshop(Request $request)
    {
        $valid_data = $request->validate([
            "text" => ["required", "max:30"],
            "numberBetween" => ["required"],

        ]);
        $filename="";
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('Y-m-d-H-i-s').$file->getClientOriginalName();
            $file->move(public_path('images/shop'), $filename);
        }

        Shop::create([
            "title" => $valid_data["title"],
            "price" => $valid_data["numberBetween"],
            "image"=>$filename,
        ]);
        return redirect("/admin/shop");

    }



    public function displayUpdateShop(Shop $shop)
    {
        return view("admin.edit_shop", ["shop" => $shop]);
    }
    public function updateShop(Shop $shop, Request $request)
    {
        $valid_data = $request->validate([
            "text" => ["required", "max:30"],
            "price" => ["required"],
        ]);
        $shop->update([
            "text" => $valid_data["text"],
            "price" => $valid_data["numberBetween"]
        ]);
        return redirect("/admin/shop");
    }

    public function deleteShop(Shop $shop)
    {
        $shop->delete();
        return back();
    }

    public function displayAllShop()
    {
        return view("admin/shop", ['shop' => $this->getAllShop()]);
    }

}
