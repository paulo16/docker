<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->unsignedInteger('produit_id');
            $table->timestamps();
        });

        Schema::table('services', function (Blueprint $table) {
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
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['produits']);
        });

        Schema::dropIfExists('services');
    }
}