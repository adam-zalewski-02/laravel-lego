<?php

namespace Database\Seeders;

use App\Models\LegoSubTheme;
use App\Models\LegoTheme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subthemes = [
            [
                'parent_theme_code' => "ct",
                'name' => 'Arctic',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Cargo',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'City Airport',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Deep Sea',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Demolition',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Farm',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Fire',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Forest',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Great Vehicles',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Harbour',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Jungle',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Coast Guard',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Mining',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Police',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Prison Island Police',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Space',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Swamp Police',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Town',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Traffic',
            ],
            [
                'parent_theme_code' => "ct",
                'name' => 'Transportation',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Star Wars Episode I',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Star Wars Episode II',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Star Wars Episode III',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Star Wars The clone Wars',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Microfighters',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Star Wars The Mandalorian',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Classic Star Wars',
            ],
            [
                'parent_theme_code' => "sw",
                'name' => 'Star Wars The Rise of Skywalker',
            ]
        ];
        
        
        foreach ($subthemes as $subtheme) {
            LegoSubTheme::create($subtheme);
        }
    }
}
