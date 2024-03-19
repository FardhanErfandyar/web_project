<?php

namespace App\Models;



class Post
{
    private static $card_posts = [
        [
            'image' => 'img/Fivas.jpg',
            'district' => 'keputih',
            'name' => 'Fiva Futsal',
            'time' => '0.00 - 22.00',
            'slug' => 'fiva-futsal',
        ],
        [
            'image' => 'img/hokky.jpg',
            'district' => 'Sukolilo',
            'name' => 'Hokky Futsal',
            'time' => '07.00 - 00.00',
            'slug' => 'hokky-futsal',
        ],
        [
            'image' => 'img/redd.jpg',
            'district' => 'Tenggilis Mejoyo',
            'name' => 'Red Futsal',
            'time' => '09.00 - 17.00',
            'slug' => 'red-futsal',
        ],
        [
            'image' => 'img/pfs.jpg',
            'district' => 'Rungkut',
            'name' => 'Premier Futsal Surabaya',
            'time' => '09.00 - 17.00',
            'slug' => 'premier-futsal-surabaya',
        ]
    ];

    public static function all()
    {
        return collect(self::$card_posts);
    }

    static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
