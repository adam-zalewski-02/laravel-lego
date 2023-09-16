<?php

namespace Database\Seeders;

use App\Models\LegoSet;
use Illuminate\Database\Seeder;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sets = [
            [
                'set_number' => 60194,
                'theme_code' => "ct",
                'sub_theme_id' => 1,
                'price' => 49.99,
                'piece_count' => 322,
                'minifigure_count' => 3,
                'year' => 2018
            ],
            [
                'set_number' => 60022,
                'theme_code' => "ct",
                'sub_theme_id' => 2,
                'price' => 99.99,
                'piece_count' => 658,
                'minifigure_count' => 5,
                'year' => 2013
            ],
            [
                'set_number' => 3178,
                'theme_code' => "ct",
                'sub_theme_id' => 3,
                'price' => 84.03,
                'piece_count' => 102,
                'minifigure_count' => 1,
                'year' => 2009
            ],
            [
                'set_number' => 60090,
                'theme_code' => "ct",
                'sub_theme_id' => 4,
                'price' => 6.99,
                'piece_count' => 42,
                'minifigure_count' => 1,
                'year' => 2015
            ],
            [
                'set_number' => 60072,
                'theme_code' => "ct",
                'sub_theme_id' => 5,
                'price' => 9.99,
                'piece_count' => 85,
                'minifigure_count' => 2,
                'year' => 2015
            ],
            [
                'set_number' => 7634,
                'theme_code' => "ct",
                'sub_theme_id' => 6,
                'price' => 9.99,
                'piece_count' => 78,
                'minifigure_count' => 1,
                'year' => 2009
            ],
            [
                'set_number' => 60105,
                'theme_code' => "ct",
                'sub_theme_id' => 7,
                'price' => 5.99,
                'piece_count' => 64,
                'minifigure_count' => 1,
                'year' => 2016
            ],
            [
                'set_number' => 4205,
                'theme_code' => "ct",
                'sub_theme_id' => 8,
                'price' => 39.99,
                'piece_count' => 403,
                'minifigure_count' => 3,
                'year' => 2012
            ],
            [
                'set_number' => 60113,
                'theme_code' => "ct",
                'sub_theme_id' => 9,
                'price' => 9.99,
                'piece_count' => 104,
                'minifigure_count' => 1,
                'year' => 2016
            ],
            [
                'set_number' => 4645,
                'theme_code' => "ct",
                'sub_theme_id' => 10,
                'price' => 79.99,
                'piece_count' => 551,
                'minifigure_count' => 4,
                'year' => 2011
            ],
            [
                'set_number' => 60162,
                'theme_code' => "ct",
                'sub_theme_id' => 11,
                'price' => 123.9,
                'piece_count' => 1250,
                'minifigure_count' => 7,
                'year' => 2017
            ],
            [
                'set_number' => 60167,
                'theme_code' => "ct",
                'sub_theme_id' => 12,
                'price' => 99.99,
                'piece_count' => 792,
                'minifigure_count' => 7,
                'year' => 2017
            ],
            [
                'set_number' => 30151,
                'theme_code' => "ct",
                'sub_theme_id' => 13,
                'price' => 2.99,
                'piece_count' => 32,
                'minifigure_count' => 1,
                'year' => 2012
            ],
            [
                'set_number' => 7498,
                'theme_code' => "ct",
                'sub_theme_id' => 14,
                'price' => 99.99,
                'piece_count' => 783,
                'minifigure_count' => 6,
                'year' => 2011
            ],
            [
                'set_number' => 60126,
                'theme_code' => "ct",
                'sub_theme_id' => 15,
                'price' => 5.99,
                'piece_count' => 47,
                'minifigure_count' => 2,
                'year' => 2016
            ],
            [
                'set_number' => 3368,
                'theme_code' => "ct",
                'sub_theme_id' => 16,
                'price' => 5.99,
                'piece_count' => 494,
                'minifigure_count' => 4,
                'year' => 2011
            ],
            [
                'set_number' => 60067,
                'theme_code' => "ct",
                'sub_theme_id' => 17,
                'price' => 102.92,
                'piece_count' => 253,
                'minifigure_count' => 3,
                'year' => 2014
            ],
            [
                'set_number' => 60097,
                'theme_code' => "ct",
                'sub_theme_id' => 18,
                'price' => 169.99,
                'piece_count' => 1683,
                'minifigure_count' => 12,
                'year' => 2015
            ],
            [
                'set_number' => 7638,
                'theme_code' => "ct",
                'sub_theme_id' => 19,
                'price' => 12.99,
                'piece_count' => 129,
                'minifigure_count' => 1,
                'year' => 2009
            ],
            [
                'set_number' => 7731,
                'theme_code' => "ct",
                'sub_theme_id' => 20,
                'price' => 6.49,
                'piece_count' => 66,
                'minifigure_count' => 1,
                'year' => 2008
            ],
            [
                'set_number' => 75021,
                'theme_code' => "sw",
                'sub_theme_id' => 21,
                'price' => 339.95,
                'piece_count' => 1175,
                'minifigure_count' => 8,
                'year' => 2013
            ],
            [
                'set_number' => 75035,
                'theme_code' => "sw",
                'sub_theme_id' => 22,
                'price' => 19.99,
                'piece_count' => 99,
                'minifigure_count' => 4,
                'year' => 2014
            ],
            [
                'set_number' => 75199,
                'theme_code' => "sw",
                'sub_theme_id' => 23,
                'price' => 34.99,
                'piece_count' => 157,
                'minifigure_count' => 2,
                'year' => 2017
            ],
            [
                'set_number' => 75028,
                'theme_code' => "sw",
                'sub_theme_id' => 24,
                'price' => 9.99,
                'piece_count' => 96,
                'minifigure_count' => 1,
                'year' => 2014
            ],
            [
                'set_number' => 75325,
                'theme_code' => "sw",
                'sub_theme_id' => 25,
                'price' => 64.99,
                'piece_count' => 412,
                'minifigure_count' => 4,
                'year' => 2022
            ],
            [
                'set_number' => 3340,
                'theme_code' => "sw",
                'sub_theme_id' => 26,
                'price' => 5.00,
                'piece_count' => 32,
                'minifigure_count' => 3,
                'year' => 2000
            ],
            [
                'set_number' => 75257,
                'theme_code' => "sw",
                'sub_theme_id' => 27,
                'price' => 169.99,
                'piece_count' => 1353,
                'minifigure_count' => 7,
                'year' => 2019
            ]
        ];
        
        
        foreach ($sets as $set) {
            LegoSet::create($set);
        }
    }
}
