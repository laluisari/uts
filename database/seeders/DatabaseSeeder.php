<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        // User::factory(2)->create(); //ini adalah yg bawaan
        User::create([
            'name' => 'laluisari',
            'email' => 'laluisari@gmail.com',
            'username' => 'laluisari',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
     

       //kalau ini adalah yang kita buat yah tentuin

        // \App\Models\User::factory()->create([  
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
