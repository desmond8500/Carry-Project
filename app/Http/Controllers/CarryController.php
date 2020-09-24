<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CarryController extends Controller
{
    public function index(){
        $cars = json_decode(file_get_contents('test/cars.json'));
        $user = Auth::user();

        return view('0 CarryProject.pages.index',compact('cars', 'user'));
    }
    public function login(){

        return view('0 CarryProject.pages.login');
    }
    public function register(){

        return view('0 CarryProject.pages.register');
    }
    public function auth(Request $request){
        if ($request->role) {
            $user = new User();

            $user->prenom = $request->prenom;
            $user->nom = $request->nom;
            $user->role = $request->role;
            $user->tel = $request->tel;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('carry.login');
        }else{

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('carry.index');
            } else{
                return redirect()->back();
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('carry.index');
    }
}
