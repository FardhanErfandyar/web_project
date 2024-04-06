<?php

namespace App\Models;

Post::insert([
    [
        'image' => 'img/Fivas.jpg',
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
        'image' => 'img/hokky.jpg',
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
        'image' => 'img/redd.jpg',
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
        'image' => 'img/pfs.jpg',
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
    ]
]);

District::insert([
    [
        'name' => 'Keputih',
        'slug' => 'keputih'
    ],
    [
        'name' => 'Ngagel',
        'slug' => 'ngagel'
    ],
    [
        'name' => 'Mulyorejo',
        'slug' => 'mulyorejo'
    ],
    [
        'name' => 'Ketintang',
        'slug' => 'ketintang'
    ],
]);