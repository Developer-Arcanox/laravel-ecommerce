<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.dashboard");
    }


    public function category()
    {
        return view("admin.category");
    }

    public function categoryAdd(Request $request)
    {
        Category::create([
            "name" => $request->categoryName,
            "description" => $request->categoryDescription
        ]);

        return redirect()->route("admin.category");
    }
}
