<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipes')->insert([
            [
                'name' => 'Carne Asada',
                'text' => 'Shabby chic humblebrag banh mi bushwick, banjo kale chips meggings. Cred selfies sartorial, cloud bread disrupt blue bottle seitan. Dreamcatcher tousled bitters, health goth vegan venmo whatever street art lyft shabby chic pitchfork beard. Drinking vinegar poke tbh, iPhone coloring book polaroid truffaut tousled ramps pug trust fund letterpress. Portland four loko austin chicharrones bitters single-origin coffee. Leggings letterpress occupy pour-over.',
                'img' => 'img1.png',
                'prep' => '15',
                'cook' => '5',
                'serving' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Greek Ribs',
                'text' => 'Shabby chic humblebrag banh mi bushwick, banjo kale chips meggings. Cred selfies sartorial, cloud bread disrupt blue bottle seitan. Dreamcatcher tousled bitters, health goth vegan venmo whatever street art lyft shabby chic pitchfork beard. Drinking vinegar poke tbh, iPhone coloring book polaroid truffaut tousled ramps pug trust fund letterpress. Portland four loko austin chicharrones bitters single-origin coffee. Leggings letterpress occupy pour-over.',
                'img' => 'img2.png',
                'prep' => '15',
                'cook' => '5',
                'serving' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vegetable Soup',
                'text' => 'Shabby chic humblebrag banh mi bushwick, banjo kale chips meggings. Cred selfies sartorial, cloud bread disrupt blue bottle seitan. Dreamcatcher tousled bitters, health goth vegan venmo whatever street art lyft shabby chic pitchfork beard. Drinking vinegar poke tbh, iPhone coloring book polaroid truffaut tousled ramps pug trust fund letterpress. Portland four loko austin chicharrones bitters single-origin coffee. Leggings letterpress occupy pour-over.',
                'img' => 'img3.png',
                'prep' => '15',
                'cook' => '5',
                'serving' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Banana Pancakes',
                'text' => 'Shabby chic humblebrag banh mi bushwick, banjo kale chips meggings. Cred selfies sartorial, cloud bread disrupt blue bottle seitan. Dreamcatcher tousled bitters, health goth vegan venmo whatever street art lyft shabby chic pitchfork beard. Drinking vinegar poke tbh, iPhone coloring book polaroid truffaut tousled ramps pug trust fund letterpress. Portland four loko austin chicharrones bitters single-origin coffee. Leggings letterpress occupy pour-over.',
                'img' => 'img4.png',
                'prep' => '30',
                'cook' => '15',
                'serving' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
