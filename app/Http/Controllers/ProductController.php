<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProductForm()
    {
        return view("admin.add-product");
    }

    public function addProduct(Request $request)
    {
        $product = Product::create([
            "name" => $request->productName,
            "description" => $request->productDescription,
            "category" => $request->productCategory,
            "status" => $request->productStatus,
            "price" => $request->productPrice,
            "original_price" => $request->productOriginalPrice,
            "stock_quantity" => $request->quantity
        ]);

        // $path = $request->file("featuredImageInput")->store("products", "private");

        foreach ($request->file("img") as $img) {
            echo var_dump($img);
        }

        $product->productImage()->create([
            // "imagePath" => $path
        ]);

        // return redirect()->route("admin.index");
    }
}
