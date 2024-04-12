<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
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
        ];

        foreach ($districts as $district) {
            District::create($district);
        }
    }
}

// php artisan db:seed --class=DistrictSeeder