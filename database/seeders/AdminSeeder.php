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
            'name' => 'M Fachriza Farhan',
            'npm' => '714220005',
            'numberPhone' => '0895379114998',
            'password' => Hash::make('admin12345'),
            'role' => 'admin'
        ]);
    }
}
