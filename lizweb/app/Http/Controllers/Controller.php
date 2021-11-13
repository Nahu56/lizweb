<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('accueil');
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


        //$correctpswd = REQUETE BDD

        if($_SESSION["pswd"] == 'ok')
        {
            return view('admin');
        }else{
            return view('connexion', ['message' => $message]); 
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
