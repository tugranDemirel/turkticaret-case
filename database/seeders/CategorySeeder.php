<?php

namespace Database\Seeders;

use App\Helpers\FileOperationsHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Kitap',
            'is_child' => 0,
        ]);
        $categories = FileOperationsHelper::arrayCreation('categories');
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
