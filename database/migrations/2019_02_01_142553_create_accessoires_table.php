<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessoires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference')->nullable();
            $table->unsignedInteger('produit_id');
            $table->timestamps();
        });

        Schema::table('accessoires', function (Blueprint $table) {
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
        Schema::table('accessoires', function (Blueprint $table) {
            $table->dropForeign(['produits']);
        });
        Schema::dropIfExists('accessoires');
    }
}
