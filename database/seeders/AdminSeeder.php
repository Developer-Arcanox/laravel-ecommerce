<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "first_name" => "admin",
            "last_name" => "user",
            "email" => "admin@demo.com",
            "password" => Hash::make("admin"),
            "phone" => 9876543210,
            "role" => "admin"
        ]);
    }
}
