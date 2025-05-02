<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ["first_name", "last_name", "email", "password", "phone"];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
