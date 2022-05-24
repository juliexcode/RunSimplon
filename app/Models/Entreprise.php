<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Entreprise extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    use HasFactory;
    protected $fillable = [
        'name',
        'prenom',
        'numero',
        'matricule',
        'modele',
        'email',
        'password',
        'adresse',
        'name_entreprise'
    ];




    public function users()
    {
        return $this->belongsToMany('App\Model\User');
    }
}
