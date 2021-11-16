<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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

    public function connexion()
    {
        return view('connexion');
    }

    public function auth()
    {
        session_start();
        $_SESSION["pswd"] = $_POST["pswd"];

        $message = "Mot de passe incorrect";


        //vérifier si le mot de passe entré égal à
        if($_SESSION["pswd"] == 'ok')
        {
            return view('admin');
        }else{

            dd('nope, mdp incorrect');
            //return view('connexion', ['message' => $message]); 
        }
    }

    public function admin()
    {
        session_start();

        $_SESSION["user"] = $_POST["user"];
        $_SESSION["password"] = $_POST["password"];

        dd($_SESSION["user"]);
    }
}
