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
            $table->unsignedInteger('moto_id')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('prix')->nullable();
            $table->unsignedInteger('intervention_id')->nullable();
            $table->timestamps();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('moto_id')->references('id')->on('motos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('intervention_id')->references('id')->on('interventions')
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
            $table->dropForeign(['intervention_id']);
            $table->dropForeign(['moto_id']);
        });
        Schema::dropIfExists('services');
    }
}
