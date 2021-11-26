<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       Category::create(
       	[
       		"name" => "Fruits",
          "slug" => Str::slug("Fruits"),
       		"image" => "fruits.jpg"
       	]
       );

       	Category::create([
       		"name" => "Vegetables",
       		"slug" => Str::slug("Vegetables"),
       		"image" => "veggies.jpg"
       	]);

       	Category::create([
       		"name" => "Milk & Dairy",
       		"slug" => Str::slug("Milk & Dairy"),
       		"image" => "milk.jpg"
       	]);

       	Category::create([
       		"name" => "Meat & Poultry",
       		"slug" => Str::slug("Meat & Poultry"),
       		"image" => "meat.png"
       	]);

       	Category::create([
       		"name" => "Seafood & Fish",
       		"slug" => Str::slug("Seafood & Fish"),
       		"image" => "seafood.jpg"

       	]);

       	Category::create([
       		"name" => "Cereals & Grains",
       		"slug" => Str::slug("Cereals & Grains"),
       		"image" => "cereals.jpeg"

       	]);

       	Category::create([
       		"name" => "Tubers",
       		"slug" => Str::slug("Tubers"),
       		"image" => "tubers.jpg"

       	]);

       	Category::create([
       		"name" => "DryFruits & Spices",
       		"slug" => Str::slug("DryFruits & Spices"),
       		"image" => "dryfruits.jpg"
       	]);

    }
}
