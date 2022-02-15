<?php

use Illuminate\Database\Seeder;

class PenalityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PenalityType::create(['name'=>'Average']);
        \App\PenalityType::create(['name'=>'Bad']);
        \App\PenalityType::create(['name'=>'Worse']);
    }
}
