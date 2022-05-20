<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['entReg', 'create']);;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // VOIR LA LISTE DES TECHNICIENS
    public function listtech()
    {

        $techs = User::query()
            ->where('tech', '=', true)
            ->get();
        return view('dashboard.listtech')->with('techs', $techs);
    }

    // RETOUNER LA VUE DASHBOARD
    public function dash()
    {

        return view('dashboard.overview');
    }
    // VOIR LA LISTE DES BENEFICIAIRE
    public function listutil()
    {
        $users = User::query()
            ->where('benef', '=', true)
            ->get();

        return view('dashboard.listutilisateur')->with('users', $users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registerentreprise');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  POUR AJOUTER UN TECHNICIEN
    public function store()
    {

        request()->validate([
            'name' => ['required'],
            'prenom' => ['required'],
            'numero' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'confirm' => ['required', 'same:password']
        ]);
        $user = new User;
        $user->name = request('name');
        $user->prenom = request('prenom');
        $user->numero = request('numero');
        $user->email = request('email');
        $user->password = hash::make(request('password'));
        $user->tech = true;
        $user->save();
        return redirect()->back();
    }

    public function inscrit()
    {
    }


    // POUR L'INSCRIPTION DES ENTREPRISES
    public function entReg()
    {
        request()->validate([
            'name' => ['required'],
            'prenom' => ['required'],
            'entreprise' => ['required'],
            'adresse' => ['required'],
            'numero' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'confirm' => ['required', 'same:password']
        ]);
        $user = new User;
        $user->name = request('name');
        $user->prenom = request('prenom');
        $user->adresse = request('adresse');
        $user->entreprise = request('entreprise');
        $user->numero = request('numero');
        $user->email = request('email');
        $user->password = hash::make(request('password'));
        $user->save();




        return view('auth.login');
    }

    // RECHERCHER UNE MATRICULATION POUR LE TECHNICIEN
    public function recherche()
    {
        $q = request()->input('q');

        $benefs = User::where('matricule', 'like', "%$q%")
            ->get();
        return view('recherche')->with('benefs', $benefs);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // POUR SUPPRIMER 
    public function delben(User $user)
    {

        $user->delete();

        return redirect()->route('admin.users.dash.listutil');
    }
}
