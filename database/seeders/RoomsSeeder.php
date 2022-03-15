<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        $data = [
            [
                'name_rooms' => 'Superior Rooms',
                'number_rooms' => '20D',
                'facility_rooms' => 'Single bed, Kamar mandi, AC, TV, Sofa, WiFi',
                'price_rooms' => '290.000'
            ],
            [
                'name_rooms' => 'Standard Rooms',
                'number_rooms' => '04B',
                'facility_rooms' => 'Single bed, Kamar mandi, AC, TV',
                'price_rooms' => '150.000'
            ],
            [
                'name_rooms' => 'Deluxe Rooms',
                'number_rooms' => '17C',
                'facility_rooms' => 'Double bed, Kamar mandi, Lemari Es, Coffee maker, AC, TV, WiFi',
                'price_rooms' => '570.000'
            ],
            [
                'name_rooms' => 'Suite Rooms',
                'number_rooms' => '02E',
                'facility_rooms' => 'Double bed, Kamar mandi, Lemari es, Ruang tamu, Dapur, Furniture terbaik, AC, TV, WiFi',
                'price_rooms' => '999.500'
            ],
        ];
        DB::table('rooms')->insert ($data);
    }
}
