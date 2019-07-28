<?php

use Illuminate\Database\Seeder;

class MoreLandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $land = new \App\Land([
            'title_no' => 6555893,
            'land_size' => 50 . 'x' . 100,
            'land_location' => 'Naivasha',
            'land_price' => 600000,
            'land_status' => 0

        ]);
        $land->save();



		$land = new \App\Land([
            'title_no' => 6555893,
            'land_size' => 80 . 'x' . 100,
            'land_location' => 'Kajiado',
            'land_price' => 600000,
            'land_status' => 0
            

        ]);
        $land->save();


   		$land = new \App\Land([
            'title_no' => 6555793,
            'land_size' => 60 . 'x' . 100,
            'land_location' => 'Mombasa',
            'land_price' => 600000,
            'land_status' => 0

        ]);
        $land->save();



    }
}
