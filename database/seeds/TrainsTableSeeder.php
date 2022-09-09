<?php

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Italo',
                'departure gate' => 'Macerata',
                'arrival gate' => 'Torino',
                'departure time' => '3:00 a.m',
                'arrival time' => '7:00 a.m',
                'code' => '325647',
                'carriage numeber' => '5',
                'in time' => 'true',
                'cancelled' => 'false',
            ],
            [
                'company' => 'Trenitalia',
                'departure gate' => 'Milano',
                'arrival gate' => 'Roma',
                'departure time' => '3:00 a.m',
                'arrival time' => '7:00 a.m',
                'code' => '4523452',
                'carriage numeber' => '10',
                'in time' => 'true',
                'cancelled' => 'false',
            ],
            [
                'company' => 'PDP Trains',
                'departure gate' => 'Paperopoli',
                'arrival gate' => 'Ocopoli',
                'departure time' => '3:00 a.m',
                'arrival time' => '7:00 a.m',
                'code' => '34523452',
                'carriage numeber' => '14',
                'in time' => 'false',
                'cancelled' => 'true',
            ],
        ];
    }
}
