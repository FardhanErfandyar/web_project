<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'image' => '/img/Fivas.jpg',
                'user_id' => 2,
                'district_id' => 4,
                'address' => 'Jalan Keputih',
                'name' => 'Fiva Futsal',
                'time' => '0.00 - 22.00',
                'facility' => 'Tennis Meja',
                'price' => '100000',
                'map' => 'maps maps maps',
                'slug' => 'fiva-futsal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/img/hokky.jpg',
                'user_id' => 1,
                'district_id' => 3,
                'address' => 'Jalan Keputih',
                'name' => 'Hokky Futsal',
                'time' => '07.00 - 00.00',
                'facility' => 'Tennis Meja',
                'price' => '100000',
                'map' => 'maps maps maps',
                'slug' => 'hokky-futsal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/img/redd.jpg',
                'user_id' => 1,
                'district_id' => 2,
                'address' => 'Jalan Keputih',
                'name' => 'Red Futsal',
                'time' => '09.00 - 17.00',
                'facility' => 'Tennis Meja',
                'price' => '100000',
                'map' => 'maps maps maps',
                'slug' => 'red-futsal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/img/pfs.jpg',
                'user_id' => 1,
                'district_id' => 1,
                'address' => 'Jalan Keputih',
                'name' => 'Premier Futsal Surabaya',
                'time' => '09.00 - 17.00',
                'facility' => 'Tennis Meja',
                'price' => '100000',
                'map' => 'maps maps maps',
                'slug' => 'premier-futsal-surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '/img/redf.jpg',
                'user_id' => 1,
                'district_id' => 1,
                'address' => 'Jalan Keputih',
                'name' => 'Green Futsal',
                'time' => '09.00 - 17.00',
                'facility' => 'Tennis Meja',
                'price' => '100000',
                'map' => 'maps maps maps',
                'slug' => 'green-futsal-surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }

    }
}

// php artisan db:seed --class=PostSeeder