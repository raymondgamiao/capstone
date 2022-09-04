<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Inventory;
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
        \App\Models\User::factory(10)->create();

        Listing::factory(5)->create();

        Inventory::factory(20)->create();
        Branch::factory(5)->create();
        Category::factory(10)->create();

        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.3098028447126279&type=3',
            'album_cover' => 'images/portfolio/debut-one.webp',
            'album_name' => 'Kate Pre-Debut',
            'album_date' => '4-7-22'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.3098028447126279&type=3',
            'album_cover' => 'images/portfolio/debut-two.webp',
            'album_name' => 'Kate Pre-Debut',
            'album_date' => '4-7-22'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.3098028447126279&type=3',
            'album_cover' => 'images/portfolio/debut-three.webp',
            'album_name' => 'Kate Pre-Debut',
            'album_date' => '4-7-22'
        ]);

        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2521464241449372&type=3',
            'album_cover' => 'images/portfolio/debut-first.webp',
            'album_name' => 'Cristine Kethel <br> A Decade and Eight',
            'album_date' => '3-02-22'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2521464241449372&type=3',
            'album_cover' => 'images/portfolio/debut-second.webp',
            'album_name' => 'Cristine Kethel <br> A Decade and Eight',
            'album_date' => '3-02-22'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2521464241449372&type=3',
            'album_cover' => 'images/portfolio/debut-third.webp',
            'album_name' => 'Cristine Kethel <br> A Decade and Eight',
            'album_date' => '3-02-22'
        ]);

        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2511018829160580&type=3',
            'album_cover' => 'images/portfolio/wedding-first.webp',
            'album_name' => 'Ramon & Eden Wedding',
            'album_date' => '18-2-22'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2511018829160580&type=3',
            'album_cover' => 'images/portfolio/wedding-second.webp',
            'album_name' => 'Ramon & Eden Wedding',
            'album_date' => '18-2-22'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2511018829160580&type=3',
            'album_cover' => 'images/portfolio/wedding-third.webp',
            'album_name' => 'Ramon & Eden Wedding',
            'album_date' => '18-2-22'
        ]);

        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2972748582987600&type=3',
            'album_cover' => 'images/portfolio/wedding-one.webp',
            'album_name' => 'Andrew & Leibel Wedding',
            'album_date' => '26-10-21'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2972748582987600&type=3',
            'album_cover' => 'images/portfolio/wedding-two.webp',
            'album_name' => 'Andrew & Leibel Wedding',
            'album_date' => '26-10-21'
        ]);
        Gallery::create([
            'album_url' => 'https://www.facebook.com/media/set/?set=a.2972748582987600&type=3',
            'album_cover' => 'images/portfolio/wedding-three.webp',
            'album_name' => 'Andrew & Leibel Wedding',
            'album_date' => '26-10-21'
        ]);

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
