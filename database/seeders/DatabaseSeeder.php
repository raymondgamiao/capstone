<?php

namespace Database\Seeders;

use App\Models\Listing;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();
        /*  Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'ACME Corp',
            'location' => 'Boston, MA',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet'
        ]);

        Listing::create([
            'title' => 'Fullstack engineer',
            'tags' => 'laravel, javascript',
            'company' => 'ACME Corp',
            'location' => 'Boston, MA',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet' 
        ]);
        */
    }
}
