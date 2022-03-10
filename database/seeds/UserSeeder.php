<?php

use App\UserCreditScore;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(['first_name' =>'System','last_name'=>'Admin','email'=>'admin@admin.com','phone'=>'254704522671','dob'=>'1993-11-16','gender'=>'Male','id_number'=>30156964,'password'=>\Illuminate\Support\Facades\Hash::make("password"),'role_id'=>1]);
        \App\User::create(['first_name' =>'Super','last_name'=>'Admin','email'=>'superadmin@admin.com','phone'=>'254704522622','dob'=>'1990-11-16','gender'=>'Male','id_number'=>3015677,'password'=>\Illuminate\Support\Facades\Hash::make("password"),'role_id'=>1]);

         $user1 = \App\User::create(['first_name' =>'Peter','last_name'=>'Simon','email'=>'peter@gmail.com','phone'=>'254704522677','dob'=>'1993-10-16','gender'=>'Male','id_number'=>30156989,'password'=>\Illuminate\Support\Facades\Hash::make("password")]);
         \App\UserLoanDetail::create(['address1'=>'Box 19','address2'=>'box 35','city'=>'Nairobi','postcode'=>3000,'is_employed'=>1,'salary'=>200000,'company_name'=>'XYZ LTD',
             'company_phone'=>100,'employer_name'=>'Moses','first_next_of_kin_name'=>'James','first_next_of_kin_phone'=>'254712345678','first_next_of_kin_relationship'=>'Sibling','second_next_of_kin_name'=>'Winnie',
             'second_next_of_kin_phone'=>'254798765437','second_next_of_kin_relationship'=>'Parent','user_id'=>$user1->id]);
           UserCreditScore::create(['user_id'=>1,'total_score'=>6,'total_score_value'=>5000,'score_type'=>'base_score','score_reason'=>'base_score','score_description'=>'First_loan_to_flexpay_customer']);

        $user2 = \App\User::create(['first_name' =>'John','last_name'=>'Doe','email'=>'johndoe@gmail.com','phone'=>'254714536008','dob'=>'1990-11-16','gender'=>'Female','id_number'=>29156964,'password'=>\Illuminate\Support\Facades\Hash::make("password")]);
         \App\UserLoanDetail::create(['address1'=>'box 44','address2'=>'box 99','city'=>'Kisumu','postcode'=>3000,'is_employed'=>0,'other_income'=>15000,'first_next_of_kin_name'=>'William','first_next_of_kin_phone'=>'254712345674','first_next_of_kin_relationship'=>'Friend','second_next_of_kin_name'=>'Timothy',
             'second_next_of_kin_phone'=>'254798765600','second_next_of_kin_relationship'=>'Spouse','user_id'=>$user2->id]);
         UserCreditScore::create(['user_id'=>2,'total_score'=>4,'total_score_value'=>5000,'score_type'=>'base_score','score_reason'=>'base_score','score_description'=>'First_loan_to_flexpay_customer']);
        \App\User::create(['first_name' =>'Edith','last_name'=>'Wanyua','email'=>'william@gmail.com','phone'=>'254715027464','dob'=>'1990-11-16','gender'=>'Female','id_number'=>29156444,'password'=>\Illuminate\Support\Facades\Hash::make("password")]);
    }
}
