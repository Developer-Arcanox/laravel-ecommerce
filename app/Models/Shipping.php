<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = ["first_name", "last_name", "email", "phone", "street", "country", "state", "city", "pin_code"];
}
