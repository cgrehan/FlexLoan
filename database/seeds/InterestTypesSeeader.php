<?php

use Illuminate\Database\Seeder;

class InterestTypesSeeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\InterestType::create(['name' =>'On Offer']);
        \App\InterestType::create(['name' =>'Penalty']);
        \App\InterestType::create(['name' =>'Rollover']);
    }
}
