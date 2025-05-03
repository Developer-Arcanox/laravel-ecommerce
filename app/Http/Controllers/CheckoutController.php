<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view("checkout");
    }

    public function checkoutSubmit(Request $request)
    {
        Shipping::create([
            "first_name" => $request->firstName,
            "last_name" => $request->lastName,
            "email" => $request->email,
            "phone" => $request->phone,
            "street" => $request->street,
            "country" => $request->country,
            "state" => $request->state,
            "city" => $request->city,
            "pin_code" => $request->zipCode,
        ]);
        return redirect()->route("payment");
    }

    public function payment()
    {
        return view("payment");
    }

    public function confirm()
    {
        return view("confirm");
    }
}
