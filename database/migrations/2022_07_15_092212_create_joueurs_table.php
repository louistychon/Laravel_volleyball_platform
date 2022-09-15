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
        Schema::create('joueur', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->bigInteger('telephone');
            $table->string('email');
            $table->boolean('genre');
            $table->string('pays');
            $table->foreignId('photos_id')->references('id')
            ->on('photos')
            ->onDelete('cascade');
            $table->foreignId('equipes_id')->references('id')
            ->on('equipes')
            ->onDelete('cascade');
            $table->foreignId('roles_id')->references('id')
            ->on('roles')
            ->onDelete('cascade');
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
        Schema::dropIfExists('joueurs');
    }
};
