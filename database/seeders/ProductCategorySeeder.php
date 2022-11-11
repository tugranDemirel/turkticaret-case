<?php

namespace Database\Seeders;

use App\Helpers\FileOperationsHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategories = FileOperationsHelper::arrayCreation('product_category');
        foreach ($productCategories as $productCategory) {
            ProductCategory::create($productCategory);
        }
    }
}
