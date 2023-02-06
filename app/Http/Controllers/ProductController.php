<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts()
    {
        $products = Product::latest();

        if (request('search')) {
            $products->where('title', 'like', '%' . request('search') . '%');
            // ->orWhere('description', 'like', '%' . request('search') . '%');
        }

        if (auth()) {
            $products->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }

        return view('products', [
            "title" => 'Products',
            "products" => $products->paginate(12)->withQueryString()

        ]);
    }

    public function detailProduct(Product $product)
    {
        return view('product', [
            'title' => 'Detail Products',
            'product' => $product
        ]);
    }
}