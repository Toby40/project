<?php

use Illuminate\Database\Seeder;

class LandsTableSeeder extends Seeder
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
            'title_no' => 6575893,
            'land_size' => 50 . 'x' . 100,
            'land_location' => 'Naivasha',
            'land_price' => 500000

        ]);
        $land->save();
    }
}
