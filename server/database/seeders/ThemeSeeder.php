<?php

namespace Database\Seeders;

use App\Models\LegoTheme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $legoThemes = [            
            ['name' => 'City', 'code' => 'ct'],
            ['name' => 'Star Wars', 'code' => 'sw'],
            ['name' => 'Ninjago', 'code' => 'njo'],
            ['name' => 'Technic', 'code' => 'tc'],
            ['name' => 'Creator', 'code' => 'cr'],
            ['name' => 'Harry Potter', 'code' => 'hp'],
            ['name' => 'Ideas', 'code' => 'idea'],
            ['name' => 'Super Heroes', 'code' => 'sh'],
            ['name' => 'Jurassic World', 'code' => 'jw'],
            ['name' => 'Friends', 'code' => 'frnd'],
            ['name' => 'Hidden Side', 'code' => 'hs'],
            ['name' => 'Speed Champions', 'code' => 'sc'],
            ['name' => 'Disney', 'code' => 'dis'],
            ['name' => 'Minecraft', 'code' => 'mc'],
            ['name' => 'Architecture', 'code' => 'ar'],
            ['name' => 'Classic', 'code' => 'cl'],
            ['name' => 'Dots', 'code' => 'dt'],
            ['name' => 'Education', 'code' => 'ed'],
            ['name' => 'Mindstorms', 'code' => 'ms'],
            ['name' => 'Monkie Kid', 'code' => 'mk'],
            ['name' => 'Overwatch', 'code' => 'ow'],
            ['name' => 'Pirates of the Caribbean', 'code' => 'poc'],
            ['name' => 'Bionicle', 'code' => 'bn']
        ];

        foreach ($legoThemes as $theme) {
            LegoTheme::create($theme);
        }
    }
}
