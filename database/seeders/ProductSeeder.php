<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = DB::table('products');
        $product->insert(
            [
                'name' => 'Tunik merid',
                'slug' => \Str::slug('Tunik Merid'),
                'price' => 45000,
                'stock' => 50,
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
                'thumbnail' => 'default.png'
            ]
        );
        $product->insert(
            [
                'name' => 'Tunik Koora',
                'slug' => \Str::slug('Tunik Koora'),
                'price' => 45000,
                'stock' => 50,
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
                'thumbnail' => 'default.png'
            ]
        );
        $product->insert(
            [
                'name' => 'Tunik Yoshi',
                'slug' => \Str::slug('Tunik Yoshi'),
                'price' => 45000,
                'stock' => 50,
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
                'thumbnail' => 'default.png'
            ]
        );
        $product->insert(
            [
                'name' => 'Tunik Bluberry',
                'slug' => \Str::slug('Tunik Bluberry'),
                'price' => 45000,
                'stock' => 50,
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
                'thumbnail' => 'default.png'
            ]
        );
        $product->insert(
            [
                'name' => 'Gamis Bluberry',
                'slug' => \Str::slug('Gamis Bluberry'),
                'price' => 45000,
                'stock' => 50,
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
                'thumbnail' => 'default.png'
            ]
        );
    }
}
