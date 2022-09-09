<?php

use App\Train;
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
                'departure time' => '3:00',
                'arrival time' => '7:00',
                'code' => '325647',
                'carriage number' => 5,
                'in time' => true,
                'cancelled' => false,
            ],
            [
                'company' => 'Trenitalia',
                'departure gate' => 'Milano',
                'arrival gate' => 'Roma',
                'departure time' => '3:00',
                'arrival time' => '7:00',
                'code' => '4523452',
                'carriage number' => 10,
                'in time' => true,
                'cancelled' => false,
            ],
            [
                'company' => 'PDP Trains',
                'departure gate' => 'Paperopoli',
                'arrival gate' => 'Ocopoli',
                'departure time' => '3:00',
                'arrival time' => '7:00',
                'code' => '34523452',
                'carriage number' => 14,
                'in time' => false,
                'cancelled' => true,
            ],
        ];
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain -> company = $train['company'];
            $newTrain -> departure_gate = $train['departure gate'];
            $newTrain -> arrival_gate = $train['arrival gate'];
            $newTrain -> departure_time = $train['departure time'];
            $newTrain -> arrival_time = $train['arrival time'];
            $newTrain -> code = $train['code'];
            $newTrain -> carriage_number = $train['carriage number'];
            $newTrain -> in_time = $train['in time'];
            $newTrain -> cancelled = $train['cancelled'];
            $newTrain -> save();
        }
    }
}
