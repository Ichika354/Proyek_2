<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Ghaida Fasya Yuthika Afifah',
        //     'npm' => '714220005',
        //     'numberPhone' => '081212344321',
        //     'password' => Hash::make('admin12345'),
        //     'role' => 'admin'
        // ]);
        $this->call(AdminSeeder::class);
    }
}
