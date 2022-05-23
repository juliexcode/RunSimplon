<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EntrepriseController extends Controller
{

    // POUR L'INSCRIPTION DES ENTREPRISES
    public function entReg()
    {
        request()->validate([
            'name' => ['required'],
            'prenom' => ['required'],
            'entreprise' => ['required'],
            'adresse' => ['required'],
            'numero' => ['required'],
            'email' => ['required', 'email', 'unique:entreprises'],
            'password' => ['required', 'min:8'],
            'confirm' => ['required', 'same:password']
        ]);
        $entreprise = new Entreprise();
        $entreprise->name = request('name');
        $entreprise->prenom = request('prenom');
        $entreprise->adresse = request('adresse');
        $entreprise->entreprise = request('entreprise');
        $entreprise->numero = request('numero');
        $entreprise->email = request('email');
        $entreprise->password = hash::make(request('password'));
        $entreprise->save();
        return view('auth.login');
    }
}
