<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Commande;
use App\Models\Lieu;
use App\Models\Trajet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CarryController extends Controller
{
    public function index(){
        $cars = Car::where('disponibilite','true')->paginate(30);
        $user = Auth::user();

        return view('0 CarryProject.pages.index',compact('cars', 'user'));
    }

    public function car(Request $request){
        $user = Auth::user();
        $car = Car::find($request->id);
        $lieux = Lieu::all();
        $trajets = Trajet::where('car_id', $car->id)->get();

        return view('0 CarryProject.pages.car',compact('car', 'user', 'lieux', 'trajets'));
    }

    public static function getLieu($id){
        return Lieu::find($id);
    }

    public function carList(Request $request){
        $user = Auth::user();
        $cars = Car::where('owner_id',$user->id)->get();

        return view('0 CarryProject.pages.cars',compact('user', 'cars'));
    }
    public function addCommande(Request $request){
        $commande = new Commande();

        $commande->user_id = $request->user_id;
        $commande->car_id = $request->car_id;
        $commande->owner_id = $request->owner_id;
        $commande->trajet_id = $request->trajet_id;
        $commande->statut = "Nouveau";
        $commande->save();

        return redirect()->back();
    }
    public function commandes(){
        $user = Auth::user();
        $list = null;
        $commandes = Commande::where('user_id', $user->id)->get();
        foreach ($commandes as $key => $commande) {
            $list[] = Car::find($commande->car_id);
        }
        return view('0 CarryProject.pages.commandes', compact('list'));
    }

    public function clients(){
        $user = Auth::user();
        $commandes = Commande::where('owner_id',$user->id)->get();

        $list = null;

        foreach ($commandes as $key => $commande) {
            $list[] = $this->getCommande($commande);
        }

        return view('0 CarryProject.pages.clients',compact('list'));
    }

    public function getCommande($commande){
        $trajet = Trajet::find($commande->trajet_id);
        $debut = $this->getLieu($trajet->debut);
        $fin = $this->getLieu($trajet->fin);
        $trajet_info = (object) array(
            "debut" => $debut,
            "fin" => $fin,
        );


        return (object) array(
            "client" => User::find($commande->user_id),
            "car" => Car::find($commande->car_id),
            "trajet" => Trajet::find($commande->trajet_id),
            "trajet_info" => $trajet_info
        );
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

    public function useredit(Request $request){
        $user = User::find($request->id);

        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->tel = $request->tel;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->back();
    }
}
