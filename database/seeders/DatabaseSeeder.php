<?php

namespace Database\Seeders;

use App\Models\BookingEmployees;
use App\Models\Bookings;
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
        $faker = \Faker\Factory::create();
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
            'description' => 'Cameras Lenses and Accesories'
        ]);

        Category::create([
            'name' => 'Merchandise',
            'description' => 'Merchandise'
        ]);

        Category::create([
            'name' => 'Printers',
            'description' => 'Printers'
        ]);

        Category::create([
            'name' => 'Speakers',
            'description' => 'Speakers'
        ]);

        /* 
        categ: 1 = cams
               2 = benta
               3 = printers
        branches = choose from 1-7 */
        Inventory::create([
            'name' => 'Nikon D90 ',
            'description' => 'Basic photoshoots/photobooth',
            'qty' => 3,
            'branch_id' => 1,
            'category_id' => 1
        ]);

        Inventory::create([
            'name' => 'Nikon D7000 ',
            'description' => 'Basic Photo / Secondary camera',
            'qty' => 1,
            'branch_id' => 2,
            'category_id' => 1
        ]);

        Inventory::create([
            'name' => 'Sony ZV-1 ',
            'description' => 'PhotoShoots / Graduation pictures',
            'qty' => 1,
            'branch_id' => 3,
            'category_id' => 1
        ]);

        Inventory::create([
            'name' => 'Canon EOS R3',
            'description' => 'Primary Photo',
            'qty' => 1,
            'branch_id' => 4,
            'category_id' => 1
        ]);

        Inventory::create([
            'name' => 'Canon EOS 250D',
            'description' => 'Primary Video',
            'qty' => 1,
            'branch_id' => 5,
            'category_id' => 1
        ]);

        Inventory::create([
            'name' => 'Photo Frame Basic Wood 9x12"',
            'description' => 'custom made from blablabla',
            'qty' => 132,
            'branch_id' => 6,
            'category_id' => 2
        ]);

        Inventory::create([
            'name' => 'Mugs ',
            'description' => 'chemical treated, printable',
            'qty' => 32,
            'branch_id' => 6,
            'category_id' => 2
        ]);

        Inventory::create([
            'name' => 'DS RX1',
            'description' => 'printer for 4r and 5r photos',
            'qty' => 3,
            'branch_id' => 1,
            'category_id' => 3
        ]);

        Inventory::create([
            'name' => 'FUJI xerox',
            'description' => 'mass printing and photocopy',
            'qty' => 1,
            'branch_id' => 1,
            'category_id' => 3
        ]);



        User::create([
            'username' => 'mondi',
            'password' =>  bcrypt('mondi'),
            'usertype' => 'employee',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Employee::create([
            'user_id' => 1,
            'role' => 'LED Wall Technician',
            'branch_id' => 1,
            'name' => 'Raymond Gamiao',
            'contact' => '09' .  $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);


        User::create([
            'username' => 'ardhen',
            'password' =>  bcrypt('ardhen'),
            'usertype' => 'admin',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Employee::create([
            'user_id' => 2,
            'role' => 'Photographer',
            'branch_id' => 2,
            'name' => 'Ardhen Braso',
            'contact' => '09' .  $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);


        User::create([
            'username' => 'brian',
            'password' =>  bcrypt('brian'),
            'usertype' => 'admin',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Employee::create([
            'user_id' => 3,
            'role' => 'Videographer',
            'branch_id' => 3,
            'name' => 'Brian Duterte',
            'contact' => '09' .  $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);

        $username =  $faker->word();
        User::create([
            'username' => $username,
            'password' =>  bcrypt($username),
            'usertype' => 'client',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Client::create([
            'user_id' => 4,
            'email' => $faker->email(),
            'address' => $faker->Address(),
            'name' =>  $faker->name(),
            'contact' => '09' . $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);

        $username =  $faker->word();
        User::create([
            'username' => $username,
            'password' =>  bcrypt($username),
            'usertype' => 'client',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Client::create([
            'user_id' => 5,
            'email' => $faker->email(),
            'address' => $faker->Address(),
            'name' =>  $faker->name(),
            'contact' => '09' . $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);

        $username =  $faker->word();
        User::create([
            'username' => $username,
            'password' =>  bcrypt($username),
            'usertype' => 'client',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Client::create([
            'user_id' => 6,
            'email' => $faker->email(),
            'address' => $faker->Address(),
            'name' =>  $faker->name(),
            'contact' => '09' . $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);

        $username =  $faker->word();
        User::create([
            'username' => $username,
            'password' =>  bcrypt($username),
            'usertype' => 'client',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Client::create([
            'user_id' => 7,
            'email' => $faker->email(),
            'address' => $faker->Address(),
            'name' =>  $faker->name(),
            'contact' => '09' . $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);

        $username =  $faker->word();
        User::create([
            'username' => $username,
            'password' =>  bcrypt($username),
            'usertype' => 'client',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Client::create([
            'user_id' => 8,
            'email' => $faker->email(),
            'address' => $faker->Address(),
            'name' =>  $faker->name(),
            'contact' => '09' . $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);

        $username =  $faker->word();
        User::create([
            'username' => $username,
            'password' =>  bcrypt($username),
            'usertype' => 'client',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Client::create([
            'user_id' => 9,
            'email' => $faker->email(),
            'address' => $faker->Address(),
            'name' =>  $faker->name(),
            'contact' => '09' . $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
        ]);

        $username =  $faker->word();
        User::create([
            'username' => $username,
            'password' =>  bcrypt($username),
            'usertype' => 'client',
            'status' => 'active',
            'remember_token' =>  Str::random(10)
        ]);

        Client::create([
            'user_id' => 10,
            'email' => $faker->email(),
            'address' => $faker->Address(),
            'name' =>  $faker->name(),
            'contact' => '09' . $faker->numerify('##-###-####'),
            'pfp' => 'images/pfp/01.png'
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


        Bookings::create([
            'name' => 'Garnet Photoshooot',
            'date_start' => '2022-10-03',
            'date_end' => '2022-10-03',
            'time_start' => '10:00:00',
            'time_end' => '11:00:00',
            'venue' => 'Luna Branch',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 1,
            'employee_id' => $faker->numberBetween(1, 3)
        ]);

        Bookings::create([
            'name' => 'Precylin @ 18 Basic Bronze Ledwall',
            'date_start' => '2022-09-16',
            'date_end' => '2022-09-16',
            'time_start' => '15:00:00',
            'time_end' => '22:00:00',
            'venue' => 'Manios Pampanguena',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 2,
            'employee_id' => $faker->numberBetween(1, 3)
        ]);

        Bookings::create([
            'name' => '9x12 LEDwall',
            'date_start' => '2022-09-16',
            'date_end' => '2022-09-16',
            'time_start' => '08:00:00',
            'time_end' => '17:00:00',
            'venue' => 'Maynards Resort',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 3,
            'employee_id' => $faker->numberBetween(1, 3)
        ]);


        Bookings::create([
            'name' => 'Monnette Christening',
            'date_start' => '2022-09-20',
            'date_end' => '2022-09-20',
            'time_start' => '08:00:00',
            'time_end' => '12:00:00',
            'venue' => 'Linao West',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 4,
            'employee_id' => $faker->numberBetween(1, 3)
        ]);

        Bookings::create([
            'name' => 'Sebastian Retirement',
            'date_start' => '2022-09-21',
            'date_end' => '2022-09-21',
            'time_start' => '15:00:00',
            'time_end' => '23:00:00',
            'venue' => 'Dugo, Camalaniugan',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 5,
            'employee_id' => $faker->numberBetween(1, 3)
        ]);

        Bookings::create([
            'name' => 'Macky + Mitchy Wedding Ultimate Platinum',
            'date_start' => '2022-09-22',
            'date_end' => '2022-09-22',
            'time_start' => '15:00:00',
            'time_end' => '23:00:00',
            'venue' => 'Dugo, Camalaniugan',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 6,
            'employee_id' => 1
        ]);
        BookingEmployees::create([
            'booking_id' => 6,
            'employee_id' => 2
        ]);

        Bookings::create([
            'name' => 'Zina Athena Basic + Photobooth',
            'date_start' => '2022-09-24',
            'date_end' => '2022-09-24',
            'time_start' => '08:00:00',
            'time_end' => '13:30:00',
            'venue' => 'Patio Lorenzo',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 7,
            'employee_id' => 1
        ]);

        Bookings::create([
            'name' => 'Rupert + Heart Prenup',
            'date_start' => '2022-09-24',
            'date_end' => '2022-09-24',
            'time_start' => '06:00:00',
            'time_end' => '15:30:00',
            'venue' => 'Hotel Roma',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 8,
            'employee_id' => 2
        ]);


        Bookings::create([
            'name' => 'Czai 5th Birthday',
            'date_start' => '2022-09-24',
            'date_end' => '2022-09-24',
            'time_start' => '12:00:00',
            'time_end' => '16:00:00',
            'venue' => 'Events Place',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 9,
            'employee_id' => 3
        ]);

        Bookings::create([
            'name' => 'Tuguegarao Fiesta',
            'date_start' => '2022-09-25',
            'date_end' => '2022-09-30',
            'time_start' => '12:00:00',
            'time_end' => '16:00:00',
            'venue' => 'City Hall',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 10,
            'employee_id' => 1
        ]);
        BookingEmployees::create([
            'booking_id' => 10,
            'employee_id' => 2
        ]);
        BookingEmployees::create([
            'booking_id' => 10,
            'employee_id' => 3
        ]);


        Bookings::create([
            'name' => 'Ice Hardware Soft Opening ',
            'date_start' => '2022-08-31',
            'date_end' => '2022-08-31',
            'time_start' => '09:00:00',
            'time_end' => '20:00:00',
            'venue' => 'Robinhood Mall',
            'client_id' => $faker->numberBetween(1, 7)
        ]);
        BookingEmployees::create([
            'booking_id' => 11,
            'employee_id' => 1
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
