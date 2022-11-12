<?php

namespace App\Services\Interfaces;

use App\Models\Product;

interface ProductInterface{
    /*
     * Get all products
     */
    public function all();

    /*
     * Get product by id
     */
    public function byId($id);

    /*
     * Get product by slug
     */

    public function findBySlug($slug);


    /*
     * Get product by category
     */

    public function findByCategory($category);

    /*
     * Product create
     */
    public function store(Product $model): bool;

    /*
     * Product update
     */
    public function update(Product $model): bool;

    /*
     * Product delete
     */

    public function delete(Product $model): bool;
}
