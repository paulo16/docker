<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description')->nullable();
            $table->unsignedInteger('produit_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });


        Schema::table('interventions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('interventions', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });


        Schema::table('interventions', function (Blueprint $table) {
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
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['users']);
            $table->dropForeign(['clients']);
            $table->dropForeign(['produits']);
        });
        Schema::dropIfExists('interventions');
    }
}
