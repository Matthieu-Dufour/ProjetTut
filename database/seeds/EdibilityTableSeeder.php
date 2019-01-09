<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EdibilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('edibility')->insert([
            'nom' => 'Comestible',
        ]);
        DB::table('edibility')->insert([
            'nom' => 'Sans valeur',
        ]);
        DB::table('edibility')->insert([
            'nom' => 'Comestible bien cuit',
        ]);
        DB::table('edibility')->insert([
            'nom' => 'Mortel',
        ]);
        DB::table('edibility')->insert([
            'nom' => 'Toxique/comestible avec recommandation',
        ]);
        DB::table('edibility')->insert([
            'nom' => 'Suspect',
        ]);
        DB::table('edibility')->insert([
            'nom' => 'Toxique',
        ]);
    }
}