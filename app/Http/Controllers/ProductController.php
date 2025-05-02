<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProductForm()
    {
        $category = Category::all();

        return view("admin.add-product", compact("category"));
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

        $path = $request->file("featuredImageInput")->store("productFeaturedImage", "public");
        $imgPath = explode("/", $path)[1];

        $product->productImage()->create([
            "imagePath" => $imgPath,
            "featured" => "yes"
        ]);

        foreach ($request->file("imageGallery") as $img) {
            $path = $img->store("productImageGallery", "public");
            $imgPath = explode("/", $path)[1];

            $product->productImage()->create([
                "imagePath" => $imgPath,
                "featured" => "no"
            ]);
        }

        return redirect()->route("admin.index");
    }
}
