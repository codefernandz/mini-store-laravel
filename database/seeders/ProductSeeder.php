<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Camiseta básica',
            'description' => 'Camiseta de algodón 100%, disponible en varios colores.',
            'price' => 15.99,
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Sudadera con capucha',
            'description' => 'Sudadera cómoda y abrigada para el día a día.',
            'price' => 39.99,
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Gorra deportiva',
            'description' => 'Gorra ligera y transpirable, ideal para hacer deporte.',
            'price' => 12.50,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Calcetines (pack de 3)',
            'description' => 'Pack de tres pares de calcetines de algodón.',
            'price' => 9.99,
            'stock' => 200,
        ]);

        Product::create([
            'name' => 'Mochila urbana',
            'description' => 'Mochila resistente con compartimento para portátil.',
            'price' => 49.90,
            'stock' => 15,
        ]);
    }
}
