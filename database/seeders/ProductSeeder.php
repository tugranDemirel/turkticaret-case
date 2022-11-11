<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Helpers\FileOperationsHelper;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = FileOperationsHelper::arrayCreation('products');
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
