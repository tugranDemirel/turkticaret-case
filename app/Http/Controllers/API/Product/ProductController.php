<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Repositories\ProductRepository;
class ProductController extends Controller
{

private $productRepository;

    public function __construct( ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $product = $this->productRepository->all();
        return response()->json($product);
    }

    public function show($id)
    {
        return $this->productRepository->byId($id);
    }

    public function store(Request $request)
    {
        $product = $this->productRepository->store($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = $this->productRepository->byId($id);
        $product = $this->productRepository->update($product, $request->all());
        return response()->json($product, 200);
    }



}
