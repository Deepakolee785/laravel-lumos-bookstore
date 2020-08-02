<?php

use Illuminate\Database\Seeder;
use App\Models\College;

class CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        College::create([
            'name' => 'St. Xaviers College',
        ]);
        College::create([
            'name' => 'Rato Bangala School',
        ]);
        College::create([
            'name' => 'NAMI College',
        ]);
        College::create([
            'name' => 'Global College International',
        ]);
        College::create([
            'name' => ' Xavier International College, Kalopul, Kathmandu',
        ]);
        College::create([
            'name' => 'The British College, Thapathali, Kathmandu',
        ]);
        College::create([
            'name' => ' Trinity International College, Dilli Bazaar Marga, Kathmandu',
        ]);
        College::create([
            'name' => 'Chelsea International Academy,  Lainchaur, Kathmandu',
        ]);
        College::create([
            'name' => 'The British School, Patan',
        ]);
        College::create([
            'name' => 'Campion Academy, Lagankhel, Patan',
        ]);
    }
}
