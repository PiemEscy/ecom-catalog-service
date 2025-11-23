<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Wooden Dining Table',
                'description' => 'Elegant wooden dining table for family meals.',
                'price' => 499.99,
                'stock' => 20,
                'sku' => 'TABLE-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Comfortable Office Chair',
                'description' => 'Ergonomic office chair with lumbar support.',
                'price' => 149.99,
                'stock' => 35,
                'sku' => 'CHAIR-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Modern Coffee Table',
                'description' => 'Stylish coffee table made of tempered glass.',
                'price' => 199.99,
                'stock' => 15,
                'sku' => 'COFFEE-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Bookshelf',
                'description' => 'Spacious wooden bookshelf with 5 shelves.',
                'price' => 249.99,
                'stock' => 10,
                'sku' => 'BOOK-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Recliner Sofa',
                'description' => 'Comfortable leather recliner sofa for living room.',
                'price' => 799.99,
                'stock' => 5,
                'sku' => 'SOFA-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'King Size Bed Frame',
                'description' => 'Sturdy king size bed frame made from oak wood.',
                'price' => 899.99,
                'stock' => 8,
                'sku' => 'BED-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Nightstand',
                'description' => 'Compact nightstand with two drawers.',
                'price' => 79.99,
                'stock' => 25,
                'sku' => 'NIGHT-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Dining Chair Set',
                'description' => 'Set of 4 modern dining chairs.',
                'price' => 299.99,
                'stock' => 12,
                'sku' => 'DCHAIR-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Leather Armchair',
                'description' => 'Comfortable leather armchair for reading corner.',
                'price' => 349.99,
                'stock' => 7,
                'sku' => 'ARM-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
            [
                'name' => 'Glass TV Stand',
                'description' => 'Modern TV stand with tempered glass shelves.',
                'price' => 199.99,
                'stock' => 10,
                'sku' => 'TV-' . Str::upper(Str::random(5)),
                'is_active' => true,
            ],
        ];

        foreach ($products as $productData) {
            $exists = Product::where('name', $productData['name'])
                        ->orWhere('sku', $productData['sku'])
                        ->exists();

            if (!$exists) {
                Product::create($productData);
            }
        }
    }
}
