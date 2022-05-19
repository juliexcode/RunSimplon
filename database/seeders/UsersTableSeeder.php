<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'admin',
            'prenom' => 'admin',
            'numero' => '000001',
            'email' => 'admin@test.com',
            'password' => Hash::make('test1234'),
            'admin' => true
        ]);
        User::create([
            'name' => 'benef',
            'prenom' => 'beneficiaire',
            'email' => 'utilisateur@test.com',
            'matricule' => 'AB-123-AB',
            'numero' => '0123456789',
            'modele' => 'BMW',
            'password' => Hash::make('test1234'),
            'benef' => true
        ]);

        User::create([
            'name' => 'technicien',
            'prenom' => 'technicien',
            'numero' => '069898987',
            'email' => 'technicien@test.com',
            'password' => Hash::make('test1234'),
            'tech' => true
        ]);
    }
}
