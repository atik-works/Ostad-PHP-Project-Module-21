<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 15 Pro',
                'description' => '6.1-inch Super Retina XDR display, A17 Pro chip',
                'price' => 999.99,
                'stock' => 50
            ],
            [
                'name' => 'Samsung Galaxy S24 Ultra',
                'description' => '6.8-inch Dynamic AMOLED display, Snapdragon 8 Gen 3',
                'price' => 1199.99,
                'stock' => 45
            ],
            [
                'name' => 'MacBook Pro 16',
                'description' => '16-inch Retina display, M3 Pro chip',
                'price' => 2499.99,
                'stock' => 30
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'description' => 'Wireless Noise Cancelling Headphones',
                'price' => 399.99,
                'stock' => 60
            ],
            [
                'name' => 'iPad Air',
                'description' => '10.9-inch Liquid Retina display, M1 chip',
                'price' => 599.99,
                'stock' => 40
            ],
            [
                'name' => 'Dell XPS 15',
                'description' => '15.6-inch 4K OLED display, Intel Core i9',
                'price' => 1899.99,
                'stock' => 25
            ],
            [
                'name' => 'AirPods Pro',
                'description' => 'Active Noise Cancellation, Spatial Audio',
                'price' => 249.99,
                'stock' => 75
            ],
            [
                'name' => 'Samsung QN900C QLED TV',
                'description' => '85-inch 8K Smart TV',
                'price' => 7999.99,
                'stock' => 15
            ],
            [
                'name' => 'PlayStation 5',
                'description' => 'Digital Edition, 825GB SSD',
                'price' => 499.99,
                'stock' => 35
            ],
            [
                'name' => 'Canon EOS R5',
                'description' => 'Mirrorless Camera, 45MP Full-Frame Sensor',
                'price' => 3899.99,
                'stock' => 20
            ],
            [
                'name' => 'Xiaomi Robot Vacuum',
                'description' => 'Smart Robot Vacuum and Mop',
                'price' => 299.99,
                'stock' => 40
            ],
            [
                'name' => 'Apple Watch Series 9',
                'description' => 'GPS + Cellular, 45mm',
                'price' => 499.99,
                'stock' => 55
            ],
            [
                'name' => 'Bose QuietComfort 45',
                'description' => 'Wireless Noise Cancelling Headphones',
                'price' => 329.99,
                'stock' => 45
            ],
            [
                'name' => 'ASUS ROG Gaming Monitor',
                'description' => '27-inch 4K HDR 144Hz',
                'price' => 799.99,
                'stock' => 30
            ],
            [
                'name' => 'DJI Mini 3 Pro',
                'description' => 'Lightweight Drone with 4K Camera',
                'price' => 759.99,
                'stock' => 25
            ],
            [
                'name' => 'Microsoft Surface Laptop 5',
                'description' => '13.5-inch Touch Screen, Intel Core i7',
                'price' => 1299.99,
                'stock' => 35
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'description' => '7-inch OLED Display',
                'price' => 349.99,
                'stock' => 50
            ],
            [
                'name' => 'LG C3 OLED TV',
                'description' => '65-inch 4K Smart OLED TV',
                'price' => 2499.99,
                'stock' => 20
            ],
            [
                'name' => 'Logitech MX Master 3S',
                'description' => 'Wireless Performance Mouse',
                'price' => 99.99,
                'stock' => 65
            ],
            [
                'name' => 'GoPro HERO12 Black',
                'description' => '5.3K Action Camera',
                'price' => 399.99,
                'stock' => 40
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
