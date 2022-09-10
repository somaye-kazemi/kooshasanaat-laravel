<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm(){
        return view("login");
    }
    public function login(Request  $request){

       $cr= $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($cr)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        return back()->withErrors("The email or password is not correct!");

    }
    public function signupForm(){
        return view("signup");
    }
    public function signup(Request $request){
       $validated_data= $request->validate([
            "name" => "required",
            "email" => "required | email|unique:users",
            "password" => "required|min:8"
        ]);
       User::create([
           "name" => $validated_data["name"],
           "email" =>$validated_data["email"],
           "password" => Hash::make($validated_data["password"])
       ]);
       return redirect("/login");
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
