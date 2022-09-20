<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('eventos')->insert([
            [

                'title'=> 'Degrade',
                'start'=> '2022-09-09 08:00:00',
                'end'=> '2022-09-09 10:00:00',
                'color'=> '#C40233',
                'description'=> 'Corte comum',
                'user_id'=> 2,
            ],
            [

                'title'=> 'Barba',
                'start'=> '2022-09-09 13:00:00',
                'end'=> '2022-09-09 15:00:00',
                'color'=> '#29fdf2',
                'description'=> 'Barba comum',
                'user_id'=> 1,
            ]
        ]);
    }
}
