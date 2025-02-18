<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class KasirSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Kasir',
            'email' => 'kasir@example.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
        ]);
    }
}