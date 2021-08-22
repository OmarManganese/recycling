<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annotation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Annotation::insert([
            [
                'day_id' => 1,
                'recycling_material_id' => 1,
                'start_hour' => '06:00:00',
                'end_hour' => '07:00:00 '   
            ],
            [
                'day_id' => 1,
                'recycling_material_id' => 2,
                'start_hour' => '05:00:00',
                'end_hour' => '06:00:00 '   
            ],
            [
                'day_id' => 2,
                'recycling_material_id' => 3,
                'start_hour' => '07:00:00',
                'end_hour' => '08:00:00 '   
            ],
            [
                'day_id' => 3,
                'recycling_material_id' => 4,
                'start_hour' => '05:00:00',
                'end_hour' => '06:00:00 '   
            ],
            [
                'day_id' => 4,
                'recycling_material_id' => 1,
                'start_hour' => '07:00:00',
                'end_hour' => '08:00:00 '   
            ],
            [
                'day_id' => 5,
                'recycling_material_id' => 4,
                'start_hour' => '06:00:00',
                'end_hour' => '07:00:00 '   
            ],
            [
                'day_id' => 6,
                'recycling_material_id' => 2,
                'start_hour' => '07:00:00',
                'end_hour' => '08:00:00 '   
            ],
            [
                'day_id' => 7,
                'recycling_material_id' => 3,
                'start_hour' => '07:00:00',
                'end_hour' => '08:00:00 '   
            ],
        ]);
    }
}
