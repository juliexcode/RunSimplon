<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EntrepriseController extends Controller
{

    // REDIRECT POUR UNE CONNEXION D'ENTREPRISE
    public function loginEntreprise()
    {
        return view('auth.loginentreprise');
    }

    // CONNEXION D'ENTREPRISE
    public function loginEntrepriseHome()
    {


        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd(Auth::user()->id);
        $resultat = Auth::attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if ($resultat) {
            dd(Auth::user()->id);
        };

        return redirect()->back();
    }

    // POUR L'INSCRIPTION DES ENTREPRISES
    public function entReg()
    {
        request()->validate([
            'name' => ['required'],
            'prenom' => ['required'],
            'name_entreprise' => ['required'],
            'adresse' => ['required'],
            'numero' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'confirm' => ['required', 'same:password']
        ]);
        $entreprise = new Entreprise();
        $entreprise->name = request('name');
        $entreprise->prenom = request('prenom');
        $entreprise->adresse = request('adresse');
        $entreprise->name_entreprise = request('name_entreprise');
        $entreprise->numero = request('numero');
        $entreprise->email = request('email');
        $entreprise->password = hash::make(request('password'));
        $entreprise->save();
    }

    // REDIRECTION VERS LA RECHERCHE DUN BENEFICIARE + LA LISTE DES BEENEFICIARE LIER L'ENTREPRISE

    public function getUser()
    {
        $users = User::query()
            ->where('entreprise_id', '=', Auth::user()->id)
            ->get();

        // dd($users);

        return view('homeent')->with('users', $users);
    }

    // RECHERCHER UNE adresse email d'un beneficiaire
    public function recherchebenef()
    {
        $q = request()->input('q');

        $benefs = User::where('email', '=', "$q")
            ->get();

        // dd(Auth::user()->name_entreprise);


        return view('ajoutben', ['benefs' => $benefs]);
    }





    public function ajoutbenef($benef_id, $entreprise_id)
    {
        // dd($benef_id, $entreprise_id);
        // dd($entreprise_id);

        $user = User::find($benef_id);
        $user->entreprise_id = $entreprise_id;
        $user->save();

        return back();
    }
}
