<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Product::factory(25)->create();
        \App\Models\Admin::factory(1)->create();
        \App\Models\Photo::factory(40)->create();
        \App\Models\Admin::factory(1)->create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
        ]);
        \App\Models\Product::factory(10)->create([
            'buyer' => 'denize.f.aguiar@gmail.com',
        ]);
    }
}
