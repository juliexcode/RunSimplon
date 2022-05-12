<?php

namespace App\Http\Controllers\Admin;

use App\Models\Techniciens;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TechniciensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.log');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getConnect()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:4'],
        ]);
        $technicien = array(
            'email' => request('email'),
            'password' => request('password')
        );


        if (auth()->attempt($technicien)) {
            return Redirect()->intended('admin.connect');
        } else return view('auth.log');
    }

    public function online()
    {
        if (auth()->check()) {
            return view('hometech');
        } else return view('auth.log')->with('message', 'Erreur LOG');
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
            'nom' => ['required'],
            'prenom' => ['required'],
            'telephone' => ['required'],
            'email' => ['required', 'email', 'unique:techniciens'],
            'password' => ['required', 'min:4'],
            'confirm' => ['required', 'same:password']
        ]);
        $technicien = new Techniciens;
        $technicien->nom = request('nom');
        $technicien->prenom = request('prenom');
        $technicien->telephone = request('telephone');
        $technicien->email = request('email');
        $technicien->password = hash::make(request('password'));
        $technicien->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Techniciens  $techniciens
     * @return \Illuminate\Http\Response
     */
    public function show(Techniciens $techniciens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Techniciens  $techniciens
     * @return \Illuminate\Http\Response
     */
    public function edit(Techniciens $techniciens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Techniciens  $techniciens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Techniciens $techniciens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Techniciens  $techniciens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Techniciens $techniciens)
    {
        //
    }
}
