<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
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
    public function index()
    {
        $users = User::all();
        return view('dashboard.listutilisateur')->with('users', $users);
    }

    public function listtech()
    {

        $techs = User::query()
            ->where('tech', '=', true)
            ->get();
        return view('dashboard.listtech')->with('techs', $techs);
    }

    public function dash()
    {

        return view('dashboard.overview');
    }

    public function listutil()
    {
        $users = User::all();
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

        $role = Role::select('id')->where('name', 'entreprise')->first();
        $user->roles()->attach($role);


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
    public function editrole(User $user)
    {
        $role = Role::all();
        return view('admin.users.index', [
            'user' => $user,
            'roles' => $role
        ]);
    }

    public function assrole(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.dash.listutil');
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
    public function delben(User $user)
    {
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.dash.listutil');
    }
}
