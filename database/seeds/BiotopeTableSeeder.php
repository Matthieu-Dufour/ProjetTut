<?php

use Illuminate\Database\Seeder;

class BiotopeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Biotope')->insert([
            'region' => 'Sous châtaigniers']);
        DB::table('Biotope')->insert([
            'region' => 'Milieux herbeux']);
        DB::table('Biotope')->insert([
            'region' => 'Sous mélèzes']);
        DB::table('Biotope')->insert([
            'region' => 'Sous frênes']);
        DB::table('Biotope')->insert([
            'region' => 'Sous épicéas']);
        DB::table('Biotope')->insert([
             'region' => 'En sphaigne']);
        DB::table('Biotope')->insert([
              'region' => 'Sous peupliers tremble']);
        DB::table('Biotope')->insert([
            'region' => 'Autre']);
        DB::table('Biotope')->insert([
            'region' => 'Sous chênes']);
        DB::table('Biotope')->insert([
            'region' => 'Sous érables']);
        DB::table('Biotope')->insert([
            'region' => 'Sous hêtres']);
        DB::table('Biotope')->insert([
            'region' => 'Dans les prés']);
        DB::table('Biotope')->insert([
            'region' => 'Sous pins']);
        DB::table('Biotope')->insert([
            'region' => 'Forêts']);
        DB::table('Biotope')->insert([
            'region' => 'Sous feuillus']);
        DB::table('Biotope')->insert([
            'region' => 'Sous conifère']);
        DB::table('Biotope')->insert([
            'region' => 'Sous bouleaux']);
    }
}
