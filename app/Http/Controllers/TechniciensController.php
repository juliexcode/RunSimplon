<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechniciensController extends Controller
{
    public function techniciens(){
        return view ('techniciens');
    }
}
