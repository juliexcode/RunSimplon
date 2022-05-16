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
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'admin',
            'prenom' => 'admin',
            'numero' => '000001',
            'email' => 'admin@test.com',
            'password' => Hash::make('test1234')
        ]);

        $benef =  User::create([
            'name' => 'benef',
            'prenom' => 'beneficiaire',
            'email' => 'utilisateur@test.com',
            'matricule' => 'AB-123-AB',
            'numero' => '0123456789',
            'modele' => 'BMW',
            'password' => Hash::make('test1234')
        ]);
        $entreprise =  User::create([
            'name' => 'entreprise',
            'prenom' => 'entreprise',
            'email' => 'entreprise@test.com',
            'numero' => '987456123',
            'entreprise' => 'super entreprise',
            'adresse' => '45 rue du village CA',
            'password' => Hash::make('test1234')
        ]);
        $technicien =  User::create([
            'name' => 'technicien',
            'prenom' => 'technicien',
            'numero' => '069898987',
            'email' => 'technicien@test.com',
            'password' => Hash::make('test1234')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $benefRole = Role::where('name', 'benef')->first();
        $entrepriseRole = Role::where('name', 'entreprise')->first();
        $technicienRole = Role::where('name', 'technicien')->first();

        $admin->roles()->attach($adminRole);
        $benef->roles()->attach($benefRole);
        $entreprise->roles()->attach($entrepriseRole);
        $technicien->roles()->attach($technicienRole);
    }
}
