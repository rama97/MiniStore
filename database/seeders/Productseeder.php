<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Product::factory()->count(4)->createMany([
        [
        'name' => 'Body lotion',
        'qty' => 100,
         'price' => 10
        ],[
        'name' => 'face mask',
        'qty' => 0,
         'price' => 22
        ],[
        'name' => 'scrab',
        'qty' => 50,
         'price' => 15
        ],[
        'name' => 'hair mask',
        'qty' => 200,
         'price' => 20
        ],[
        'name' => 'Vitamen C cerum',
        'qty' => 300,
         'price' => 2
        ]]);
    }
}
