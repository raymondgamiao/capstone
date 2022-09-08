<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Listing;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Support\Str;
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
        // \App\Models\User::factory(15)->create();

        // Inventory::factory(20)->create();
        //Branch::factory(5)->create();
        //Category::factory(10)->create();
        /* 
        'name' => $this->faker->name(),
        'description' => $this->faker->Address(),
        'qty' => $this->faker->numberBetween(1, 100),
        'branch_id' => $this->faker->numberBetween(1, 7),
        'category_id' => $this->faker->numberBetween(1, 4), */

        Listing::factory(5)->create();



        Branch::create([
            'name' => 'PhotoCity Luna',
            'location' => 'Luna St., Tuguegarao City, Cagayan',
            'email' => 'pc1@gmail.com',
            'contact' => '0912-345-6789'
        ]);

        Branch::create([
            'name' => 'PhotoCity Mabini',
            'location' => 'Mabini St., Tuguegarao City, Cagayan',
            'email' => 'pc2@gmail.com',
            'contact' => '0912-345-6789'
        ]);

        Branch::create([
            'name' => 'PhotoCity Tabuk',
            'location' => 'Barangay, Town, Province',
            'email' => 'branchName@gmail.com',
            'contact' => '0912-345-6789'
        ]);

        Branch::create([
            'name' => 'PhotoCity Aparri',
            'location' => 'Barangay, Town, Province',
            'email' => 'branchName@gmail.com',
            'contact' => '0912-345-6789'
        ]);

        Branch::create([
            'name' => 'PhotoCity Junction',
            'location' => 'Barangay, Town, Province',
            'email' => 'branchName@gmail.com',
            'contact' => '0912-345-6789'
        ]);

        Branch::create([
            'name' => 'Sensation Lights and Sounds',
            'location' => 'Barangay, Town, Province',
            'email' => 'branchName@gmail.com',
            'contact' => '0912-345-6789'
        ]);

        Branch::create([
            'name' => 'Kodak',
            'location' => 'North Star Mall, Ilagan, Isabela',
            'email' => 'branchName@gmail.com',
            'contact' => '0912-345-6789'
        ]);


        Category::create([
            'name' => 'Cameras Lenses and Accesories',
            'description' => 'Lore Ipsum Dolor Sit amet'
        ]);

        Category::create([
            'name' => 'Merchandise',
            'description' => 'Lore Ipsum Dolor Sit amet'
        ]);

        Category::create([
            'name' => 'Printers',
            'description' => 'Lore Ipsum Dolor Sit amet'
        ]);

        Category::create([
            'name' => 'Bahala ka na',
            'description' => 'Lore Ipsum Dolor Sit amet'
        ]);


        Inventory::create([
            'name' => 'Canon EOS 600D',
            'description' => 'ewan ko, specs nya. basta',
            'qty' => 1,
            'branch_id' => 1,
            'category_id' => 1
        ]);


        /*      return [
            'user_id' => $this->faker->unique()->numberBetween(1, 5),
            'role' => $this->faker->sentence(2),
            'branch_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name(),
            'contact' => $this->faker->numerify('####-###-####')

             'username' => $this->faker->unique()->word(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' =>  $usertypes[rand(0, 2)],
            'remember_token' => Str::random(10),
        ];
 */

        User::create([
            'username' => 'mondi',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' => 'employee',
            'remember_token' =>  Str::random(10)
        ]);

        Employee::create([
            'user_id' => 1,
            'role' => 'LED Wall Technician',
            'branch_id' => 1,
            'name' => 'Raymond Gamiao',
            'contact' => '0911-111-1111'
        ]);

        User::create([
            'username' => 'ardhen',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' => 'employee',
            'remember_token' =>  Str::random(10)
        ]);

        Employee::create([
            'user_id' => 2,
            'role' => 'Admin',
            'branch_id' => 1,
            'name' => 'Ardhen Braso',
            'contact' => '0911-111-1111'
        ]);


        User::create([
            'username' => 'brian',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'usertype' => 'admin',
            'remember_token' =>  Str::random(10)
        ]);

        Employee::create([
            'user_id' => 3,
            'role' => 'Admin',
            'branch_id' => 1,
            'name' => 'Brian Duterte',
            'contact' => '0911-111-1111'
        ]);




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
