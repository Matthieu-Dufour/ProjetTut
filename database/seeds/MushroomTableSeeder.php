<?php

use Illuminate\Database\Seeder;

class MushroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Mushroom')->insert([
            'nameLat' => 'Lactarius controversus',
            'nameFr' => 'Lactaire des peupliers',
            'surname' => '',
            'edibility' => 'Sans valeur',
            'biotope' => 'Sous peuplier tremble',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Tylopilus porphyrosporus',
            'nameFr' => 'Bolet à sporée pourprée',
            'surname' => '',
            'edibility' => 'Sans valeur',
            'biotope' => 'Sous conifère',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Clitocybe alexandri',
            'nameFr' => 'Clitocybe plombé',
            'surname' => '',
            'edibility' => 'Comestible',
            'biotope' => 'Sous conifère',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Caloboletus calopus',
            'nameFr' => 'Bolet à beau pied',
            'surname' => '',
            'edibility' => 'Toxique',
            'biotope' => 'Forêts',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Amanita echinocephala',
            'nameFr' => 'Amanite épineuse',
            'surname' => '',
            'edibility' => 'Toxique',
            'biotope' => 'Sous pins',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Stereum ochraceoflavum',
            'nameFr' => 'Stérée ochracé jaune',
            'surname' => '',
            'edibility' => 'Sans valeur',
            'biotope' => 'Sous feuillus',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Bertia moriformis',
            'nameFr' => 'Bertia en forme de mûre',
            'surname' => '',
            'edibility' => 'Sans valeur',
            'biotope' => 'Sous feuillus',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Rhodocollybia maculata',
            'nameFr' => 'Collybie maculée',
            'surname' => '',
            'edibility' => 'Sans valeur',
            'biotope' => 'Sous conifère',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Hemipholiota populnea',
            'nameFr' => 'Pholiote destructrice',
            'surname' => '',
            'edibility' => 'Sans valeur',
            'biotope' => 'Sous peuplier tremble',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
        DB::table('Mushroom')->insert([
            'nameLat' => 'Russula amethystina',
            'nameFr' => 'Russule améthyste',
            'surname' => '',
            'edibility' => 'Comestible',
            'biotope' => 'Sous conifère',
            'stipe' => '',
            'cap' => '',
            'trophic_status' => '',
            'smell' => '',
            'groupe' => '',
            'lames' => '',
            'confusion' => '',
            'flesh' => '',
            'image' => '']);
    }
}
