<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions_produits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('intervention_id');
            $table->unsignedInteger('produit_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::table('interventions_produits', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('interventions_produits', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });


        Schema::table('interventions_produits', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id')->on('produits')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interventions_produits', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['client_id']);
            $table->dropForeign(['produit_id']);
        });
        
        Schema::dropIfExists('interventions_produits');
    }
}
