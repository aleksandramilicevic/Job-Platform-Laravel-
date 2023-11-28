<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Listing::create([
            'title' => "Laravel Senior Developer",
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' =>'email@email.com',
            'website'=> 'https://www.acme.com',
            'description' => 'Here shall be the description,
            im not gonna write much, cause i really dont know what'
        ]);


     //    \App\Models\User::factory()->create([
     //        'name' => 'Test User',
     //        'email' => 'unique@example.com',
     //  ]);
    }
}
