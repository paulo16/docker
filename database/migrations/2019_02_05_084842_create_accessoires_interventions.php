<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoiresInterventions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessoires_interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('intervention_id');
            $table->unsignedInteger('accessoire_id');
            $table->unsignedInteger('quantite')->nullable();
            $table->timestamps();
        });


        Schema::table('accessoires_interventions', function (Blueprint $table) {
            $table->foreign('intervention_id')->references('id')->on('interventions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });


        Schema::table('accessoires_interventions', function (Blueprint $table) {
            $table->foreign('accessoire_id')->references('id')->on('accessoires')
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
        Schema::table('accessoires_interventions', function (Blueprint $table) {
            $table->dropForeign(['intervention_id']);
            $table->dropForeign(['accessoire_id']);
        });
        
        Schema::dropIfExists('accessoires_interventions');
    }
}
