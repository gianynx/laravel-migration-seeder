<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Firenze S. M. Novella',
                'departure_time' => '2023-05-24 09:30:00',
                'arrival_time' => '2023-05-24 11:00:00',
                'number_carriages' => 10,
                'train_on_time' => false,
                'delay' => 5,
                'cancelled_train' => false,
                'train_type' => 'Frecciarossa',
                'price' => 55.00,
                'seats' => 457
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Roma Tiburtina',
                'arrival_station' => 'Venezia S. Lucia',
                'departure_time' => '2023-07-24 09:35:00',
                'arrival_time' => '2023-07-24 13:38:00',
                'number_carriages' => 11,
                'train_on_time' => false,
                'delay' => 3,
                'cancelled_train' => false,
                'train_type' => 'Frecciarossa',
                'price' => 80.00,
                'seats' => 450
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Venezia S. Lucia',
                'arrival_station' => 'Torino Porta Nuova',
                'departure_time' => '2023-07-29 06:18:00',
                'arrival_time' => '2023-07-29 09:58:00',
                'number_carriages' => 9,
                'train_on_time' => false,
                'delay' => 7,
                'cancelled_train' => false,
                'train_type' => 'Frecciarossa',
                'price' => 90.00,
                'seats' => 400
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Venezia S. Lucia',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2023-08-29 20:10:00',
                'arrival_time' => '2023-08-29 23:35:00',
                'number_carriages' => 8,
                'train_on_time' => false,
                'delay' => 3,
                'cancelled_train' => false,
                'train_type' => 'Trenord',
                'price' => 21.50,
                'seats' => 300
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Genova Brignole',
                'departure_time' => '2023-07-23 18:05:00',
                'arrival_time' => '2023-07-23 19:53:00',
                'number_carriages' => 8,
                'train_on_time' => false,
                'delay' => 5,
                'cancelled_train' => false,
                'train_type' => 'Intercity',
                'price' => 18.90,
                'seats' => 320
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => '2023-08-18 05:15:00',
                'arrival_time' => '2023-08-18 10:33:00',
                'number_carriages' => 10,
                'train_on_time' => false,
                'delay' => 8,
                'cancelled_train' => false,
                'train_type' => 'Frecciarossa',
                'price' => 59.90,
                'seats' => 360
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '2023-09-25 18:09:00',
                'arrival_time' => '2023-09-25 19:23:00',
                'number_carriages' => 9,
                'train_on_time' => false,
                'delay' => 3,
                'cancelled_train' => false,
                'train_type' => 'Frecciarossa',
                'price' => 18.90,
                'seats' => 350
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Roma Tiburtina',
                'arrival_station' => 'Genova Piazza Principe',
                'departure_time' => '2023-09-07 20:33:00',
                'arrival_time' => '2023-09-07 00:23:00',
                'number_carriages' => 10,
                'train_on_time' => false,
                'delay' => 1,
                'cancelled_train' => false,
                'train_type' => 'Frecciarossa',
                'price' => 22.90,
                'seats' => 380
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Anagni-Fiuggi',
                'departure_time' => '2023-05-24 16:43:00',
                'arrival_time' => '2023-05-24 17:33:00',
                'number_carriages' => 11,
                'train_on_time' => false,
                'delay' => 2,
                'cancelled_train' => false,
                'train_type' => 'Intercity',
                'price' => 9.90,
                'seats' => 180
            ],
            [
                'holding_name' => 'Trenitalia S.p.A',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Torino Porta Nuova',
                'departure_time' => '2023-08-24 16:43:00',
                'arrival_time' => '2023-08-24 17:33:00',
                'number_carriages' => 15,
                'train_on_time' => false,
                'delay' => 2,
                'cancelled_train' => false,
                'train_type' => 'Frecciarossa',
                'price' => 54.90,
                'seats' => 350
            ]
        ];

        foreach($data as $train)
        {
            $newTrain = new Train();
            $newTrain->holding_name = $train['holding_name'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->number_carriages = $train['number_carriages'];
            $newTrain->train_on_time = $train['train_on_time'];
            $newTrain->delay = $train['delay'];
            $newTrain->cancelled_train = $train['cancelled_train'];
            $newTrain->train_type = $train['train_type'];
            $newTrain->price = $train['price'];
            $newTrain->seats = $train['seats'];
            $newTrain->save();
        }
    }
}
