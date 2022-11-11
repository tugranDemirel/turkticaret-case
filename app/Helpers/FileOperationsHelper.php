<?php

namespace App\Helpers;

class FileOperationsHelper
{
    public static function readJsonFile($filename)
    {
        $path = storage_path() . "/${filename}"; // ie: /var/www/laravel/app/storage/filename
        return json_decode(file_get_contents($path), true);
    }

    public static function arrayCreation($tableName)
    {
        $category = [];
        $inventories = [];
        $product = [];
        $productCategory = [];
        $json = self::readJsonFile('products.json');
        $i = 1;
        foreach ($json as $key => $value) {
            $category[] = [
                'name' => $value['category_title'],
                'is_child' => 1,
            ];
            $inventories[] = [
                'id' => $i,
                'quantity' => $value['stock_quantity']
            ];
            $product[] = [
                'id' => $value['product_id'],
                'inventory_id' => $i,
                'name' => $value['title'],
                'author' => $value['author'],
                'price' => $value['list_price']
            ];
            $productCategory[] = [
                'product_id' => $value['product_id'],
                'category_id' => $value['category_id'] + 1
            ];
            $i++;
        }
        if ($tableName == 'categories')
            return  array_values($category= array_unique($category, SORT_REGULAR));
        if ($tableName == 'product_inventories')
            return $inventories;
        if ($tableName == 'products')
            return collect($product)->sortBy('id')->values()->all();
        if ($tableName == 'product_category')
            return $productCategory;
    }
}
