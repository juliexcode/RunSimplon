<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('modele')->nullable();
            $table->string('matricule')->nullable();
            $table->string('name_entreprise')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('numero')->nullable();
            $table->boolean('admin')->default(false);
            $table->boolean('benef')->default(false);
            $table->boolean('tech')->default(false);
            $table->boolean('entreprise')->default(false);
            $table->unsignedBigInteger('entreprise_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
