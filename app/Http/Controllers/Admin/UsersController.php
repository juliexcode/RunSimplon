<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
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
        $user->save();

        return redirect()->back();
    }

    public function inscrit()
    {
    }



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
    public function edit(User $user)
    {
        //
    }

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
    public function destroy(User $user)
    {
        //
    }
}