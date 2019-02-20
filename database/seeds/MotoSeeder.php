<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('motos')->insert([
         	[
            'nom' => "Sym Symphony",
            'matricule' => Str::random(10),
            'modele' => "S-50-2018",
            'couleur' => "Noir"],
                     	[
            'nom' => "Sym Orbite",
            'matricule' => Str::random(10),
            'modele' => "2018",
            'couleur' => "Bleu"],
                     	[
            'nom' => "Honda",
            'matricule' => Str::random(10),
            'modele' => "nc-750s-2017",
            'couleur' => "Noir"],
                     	[
            'nom' => "Guzzy",
            'matricule' => Str::random(10),
            'modele' => "v7 II",
            'couleur' => "Noir"]
        ]);
    }
}
