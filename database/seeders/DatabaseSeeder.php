<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /** Seed the application's database.*/
    public function run(): void
    {
        //Fake 10 data
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'roles' => 'admin',
        ]);

        //Tampilkan banyak seeder
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class

        ]);
    }
}
