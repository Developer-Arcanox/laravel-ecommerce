<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Auth::logout();

        $products = Product::all();

        return view("welcome", compact("products"));
    }

    public function showRegisterForm()
    {
        return view("register");
    }

    public function register(Request $request)
    {
        $user = User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "phone" => $request->phone
        ]);

        Auth::login($user);

        return redirect()->route("user.home");
    }

    public function showLoginForm()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect()->route("user.home");
        } else {
            return redirect()->route("login");
        }
    }

    public function user_dashboard()
    {
        return "User Account";
    }

    public function cartIndex()
    {
        return view("cart");
    }

    public function about()
    {
        return view("about");
    }

    public function category()
    {
        return view("category");
    }
}
