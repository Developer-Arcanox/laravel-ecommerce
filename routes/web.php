<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get("/", "index")->name("user.home");
    Route::get("/register", "showRegisterForm")->name("register");
    Route::post("/register", "register")->name("register.submit");
    Route::get("/login", "showLoginForm")->name("login");
    Route::post("/login", "login")->name("login.submit");
    Route::get("/cart", "cartIndex")->name("cart.index");
    Route::middleware([UserAuth::class])->group(function () {
        Route::prefix("/user")->group(function () {
            Route::get("/dashboard", "user_dashboard")->name("user.dashboard");
        });
    });
    Route::get("/about", "about")->name("user.about");
    Route::get("/category", "category")->name("user.category");
});

Route::controller(AdminController::class)->middleware(AdminAuth::class)->prefix("/admin")->group(function () {
    Route::get("/", "index")->name("admin.index");
    Route::get("/category", "category")->name("admin.category");
    Route::post("/category", "categoryAdd")->name("admin.category.add");
    Route::controller(ProductController::class)->prefix("/product")->group(function () {
        Route::get("/add", "addProductForm")->name("product.add.form");
        Route::post("/add", "addProduct")->name("product.add.submit");
    });
});


Route::controller(CartController::class)->middleware(UserAuth::class)->prefix("/cart")->group(function () {
    Route::get("/", "showCart")->name("cart.index");
    Route::post("/add", "addToCart")->name("cart.add");
    Route::post("/remove", "removeFromCart")->name("cart.remove");
});

Route::controller(CartController::class)->middleware(UserAuth::class)->prefix("/cart")->group(function () {
    Route::get("/", "showCart")->name("cart.index");
    Route::post("/add", "addToCart")->name("cart.add");
    Route::post("/remove", "removeFromCart")->name("cart.remove");
});

Route::controller(CheckoutController::class)->middleware(UserAuth::class)->prefix("/order")->group(function () {
    Route::get("/checkout", "checkout")->name("checkout");
    Route::post("/checkout", "checkoutSubmit")->name("checkout.submit");
    Route::get("/payment", "payment")->name("payment");
    Route::get("/confirm", "confirm")->name("confirm");
});
