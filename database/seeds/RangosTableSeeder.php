<?php

use Illuminate\Database\Seeder;
use App\Rango;

class RangosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Rango::create([
        //     [
        //         'rango' => '2 a 3',
        //         'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        //     ],
        //     [
        //         'rango' => '4 a 5',
        //         'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        //     ]
        // ]);

        DB::table('rangos')->insert([
            [
                'rango'      => '2-3',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'  => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rango'      => '4-5',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'  => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rango'      => '6-7',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'  => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rango'      => '8-9',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'  => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rango'      => '10-11',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'  => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'rango'      => '12-13',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'  => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
