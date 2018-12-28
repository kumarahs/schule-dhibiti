<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personnes', function (Blueprint $table) {
            $table->increments('PersonneId');
            $table->string('Nom');
            $table->string('Postnom');
            $table->string('Prenom');
            $table->string('Genre');
            $table->string('Tel');
            $table->string('Adresse');
            $table->string('LieuNaissance');
            $table->date('DateNaissance');
            $table->string('NomUtilisateur');
            $table->string('Pwd');
            $table->boolean('EstSupprime');
            $table->string('CreatedBy');
            $table->string('UpdatedBy');
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
        Schema::dropIfExists('Personnes');
    }
}
