<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Techniciens;
use Illuminate\Http\Request;

class TechniciensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'telephone' => ['required'],
            'email' => ['required', 'email', 'unique:techniciens'],
            'password' => ['required', 'min:4'],
            'confirm' => ['required', 'same:password']
        ]);
        echo "rempli avec succes";
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
