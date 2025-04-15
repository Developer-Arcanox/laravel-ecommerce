<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get("/", "index")->name("user.home");
    Route::get("/register", "showRegisterForm")->name("register");
    Route::post("/register", "register")->name("register.submit");
    Route::get("/login", "showLoginForm")->name("login");
    Route::post("/login", "login")->name("login.submit");
    Route::middleware([UserAuth::class])->group(function () {
        Route::prefix("/user")->group(function () {
            Route::get("/dashboard", "user_dashboard")->name("user.dashboard");
        });
    });
});
