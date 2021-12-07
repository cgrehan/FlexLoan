<?php

use Illuminate\Database\Seeder;

class PenalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Penality::create(['name'=>'A','penality_type_id'=>1,'rate'=>2,'range_from'=>0,'range_to'=>5000]);
      \App\Penality::create(['name'=>'B','penality_type_id'=>2,'rate'=>3,'range_from'=>0,'range_to'=>10000]);
      \App\Penality::create(['name'=>'C','penality_type_id'=>3,'rate'=>5,'range_from'=>0,'range_to'=>20000]);
    }
}
