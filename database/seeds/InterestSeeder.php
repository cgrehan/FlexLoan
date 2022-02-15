<?php

use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Interest::create(['name'=>'Basic','range_from'=>0,'range_to'=>5000,'interest_rate'=>2,'interest_type_id'=>1]);
        \App\Interest::create(['name'=>'Average','range_from'=>5000,'range_to'=>20000,'interest_rate'=>5,'interest_type_id'=>2]);
        \App\Interest::create(['name'=>'Advanced','range_from'=>20000,'range_to'=>50000,'interest_rate'=>8,'interest_type_id'=>3]);
    }
}
