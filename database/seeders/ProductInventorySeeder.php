<?php

namespace Database\Seeders;

use App\Helpers\FileOperationsHelper;
use App\Models\ProductInventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productInventories = FileOperationsHelper::arrayCreation('product_inventories');
        foreach ($productInventories as $productInventory) {
            ProductInventory::create($productInventory);
        }
    }
}
