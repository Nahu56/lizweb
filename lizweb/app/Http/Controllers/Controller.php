<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Tableau;
use App\Http\Controllers\redirect;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /* ---------------------------- ALLER A L'ACCUEIL --------------------------- */
    public function index()
    {
        return view('accueil');
    }

    /* -------------------------- AFFICHER LES TABLEAUX ------------------------- */
    public function tableaux()
    {
        $tableaux = DB::table('Tableaux')->get();

        return view('tableaux', ['tabx' => $tableaux]);
    }

    /* ------------------------- AFFICHER PAGE CONNEXION ------------------------ */
    public function connexion()
    {
        return view('connexion');
    }

    /* ---------------------------- AUTHENTIFICATION ---------------------------- */
    public function auth()
    {
        session_start();
        $_SESSION["pswd"] = $_POST["pswd"];

        $message = "Mot de passe incorrect";
        

        //vérifier si le mot de passe entré est égal à
        if($_SESSION["pswd"] == 'ok')
        {
            return redirect()->route('admin');
        }else{

            dd('nope, mdp incorrect');
            //return view('connexion', ['message' => $message]); 
        }
    }

    /* ---------------------------------- ADMIN --------------------------------- */
    public function admin(){
        $tableaux = DB::table('Tableaux')->get();

        return view('admin', ['tabx' => $tableaux]);
    }


    /* ------------------------------ AJOUT TABLEAU ----------------------------- */
    public function create(){
        return view("create");
    }

    public function store(Request $request){

        $message = "Tableau ajouté avec succès !";

        $request->validate([
            // "image"=>"required|image|mimes:jpeg,png,jpg,svg|max:4096",
            "image"=>"required",
            "nom"=>"required"
        ]);

        Storage::disk('public')->put('img', $request->image);
        Tableau::create($request->all());

        return back()->with(['message' => $message]);
    }

    public function delete(){

    }
}