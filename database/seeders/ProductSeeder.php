<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

/**
 * Seeder de productos de demo.
 *
 * Puebla la tabla 'products' con 10 registros realistas para que el catálogo
 * tenga contenido desde el primer `php artisan migrate --seed`.
 * Usamos datos hardcodeados (no Faker).
 */
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Auriculares Bluetooth',
                'description' => 'Auriculares inalámbricos con cancelación de ruido activa y 30h de batería.',
                'price' => 89.99,
                'stock' => 15,
                'image' => 'https://picsum.photos/seed/auriculares/400/300',
            ],
            [
                'name' => 'Teclado Mecánico RGB',
                'description' => 'Teclado mecánico RGB con switches táctiles y reposamuñecas magnético.',
                'price' => 129.50,
                'stock' => 8,
                'image' => 'https://picsum.photos/seed/teclado/400/300',
            ],
            [
                'name' => 'Monitor 27" 4K',
                'description' => 'Monitor IPS 4K UHD con HDR10, 60Hz y cobertura sRGB del 99%.',
                'price' => 349.00,
                'stock' => 5,
                'image' => 'https://picsum.photos/seed/monitor/400/300',
            ],
            [
                'name' => 'Ratón Ergonómico',
                'description' => 'Ratón vertical inalámbrico con sensor de 4000 DPI y diseño ergonómico.',
                'price' => 45.75,
                'stock' => 22,
                'image' => 'https://picsum.photos/seed/raton/400/300',
            ],
            [
                'name' => 'Webcam Full HD',
                'description' => 'Webcam 1080p 60fps con micrófono dual y obturador de privacidad.',
                'price' => 79.99,
                'stock' => 12,
                'image' => 'https://picsum.photos/seed/webcam/400/300',
            ],
            [
                'name' => 'Altavoz Portátil',
                'description' => 'Altavoz Bluetooth resistente al agua IPX7 con 20h de reproducción.',
                'price' => 59.90,
                'stock' => 30,
                'image' => 'https://picsum.photos/seed/altavoz/400/300',
            ],
            [
                'name' => 'Disco SSD 1TB NVMe',
                'description' => 'Unidad SSD NVMe PCIe 4.0 con 7000 MB/s de lectura secuencial.',
                'price' => 119.99,
                'stock' => 18,
                'image' => 'https://picsum.photos/seed/ssd/400/300',
            ],
            [
                'name' => 'Hub USB-C 7 en 1',
                'description' => 'Hub con HDMI 4K, 3 puertos USB 3.0, lector SD y carga PD 100W.',
                'price' => 39.95,
                'stock' => 25,
                'image' => 'https://picsum.photos/seed/hub/400/300',
            ],
            [
                'name' => 'Silla Ergonómica',
                'description' => 'Silla de oficina con soporte lumbar ajustable, reposabrazos 4D y malla transpirable.',
                'price' => 249.00,
                'stock' => 3,
                'image' => 'https://picsum.photos/seed/silla/400/300',
            ],
            [
                'name' => 'Cable HDMI 2.1',
                'description' => 'Cable HDMI 2.1 de 2m con soporte 8K@60Hz y 4K@120Hz, certificado.',
                'price' => 19.99,
                'stock' => 45,
                'image' => 'https://picsum.photos/seed/cable/400/300',
            ],
        ];

        // Product::create() respeta el $fillable y rellena timestamps automáticamente.
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
