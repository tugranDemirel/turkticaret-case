<?php

namespace App\Services\Repositories;
use App\Models\Product;
use App\Services\Interfaces\ProductInterface;

class ProductRepository implements ProductInterface
{
    public function all()
    {
        return Product::all();
    }

    public function byId($id)
    {
        return Product::find($id);
    }

    public function findBySlug($slug)
    {
        return Product::where('slug', $slug)->first();
    }

    public function findByCategory($category)
    {
        return Product::where('category_id', $category)->get();
    }

    public function store(Product $model): bool
    {
        return $model->save();
    }

    public function update(Product $model): bool
    {
        return $model->save();
    }

    public function delete(Product $model): bool
    {
        return $this->byId($model->id)->delete();
    }
}
