<?php

namespace App\Http\Controllers;

use App\User;
use App\UserCreditScore;
use App\UserLoanDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("users/index",['users'=>User::whereHas('detail')->where("role_id",2)->get()]);
    }

    public function uncompletedProfile()
    {
        $ids = User::whereHas('detail')->where("role_id",2)->pluck('id');
        $users = User::whereNotIn('id',$ids)->get();

        return view("users/index",['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia("users/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->get('user');
        $details = $request->get('details');

//        $validator = Validator::make($user,['email'=>['unique:users,email']]);
//        if ($validator->fails()){
//            $validator->errors()->messages();
//        }

        $user['password'] = Hash::make($user['password']);
        $inserted_user = User::create($user);

        $detail = new UserLoanDetail();
        $detail->is_employed = $details['is_employed'];
        $detail->salary = $details['salary'];
        $detail->company_name = $details['company_name'];
        $detail->company_phone = $details['company_phone'];
        $detail->employer_name = $details['employer_name'];
        $detail->address1 = $details['address1'];
        $detail->address2 = $details['address2'];
        $detail->postcode = $details['postcode'];
        $detail->city = $details['city'];
        $detail->first_next_of_kin_name = $details['first_next_of_kin_name'];
        $detail->first_next_of_kin_phone = $details['first_next_of_kin_phone'];
        $detail->first_next_of_kin_ralationship = $details['first_next_of_kin_ralationship'];
        $detail->second_next_of_kin_name = $details['second_next_of_kin_name'];
        $detail->second_next_of_kin_phone = $details['second_next_of_kin_phone'];
        $detail->second_next_of_kin_ralationship = $details['second_next_of_kin_ralationship'];
        $inserted_user->detail()->save($detail);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return inertia('users/Show',['user'=>User::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return  view("users/edit",['user'=>User::with('detail')->find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $request->get('user');
        $details = $request->get('details');

//        $validator = Validator::make($user,['email'=>['unique:users,email']]);
//        if ($validator->fails()){
//            $validator->errors()->messages();
//        }

        $inserted_user = User::find($id);
        $inserted_user->update($user);

        $inserted_user->detail->is_employed = $details['is_employed'];
        $inserted_user->detail->salary = $details['salary'];
        $inserted_user->detail->company_name = $details['company_name'];
        $inserted_user->detail->company_phone = $details['company_phone'];
        $inserted_user->detail->employer_name = $details['employer_name'];
        $inserted_user->detail->address1 = $details['address1'];
        $inserted_user->detail->address2 = $details['address2'];
        $inserted_user->detail->postcode = $details['postcode'];
        $inserted_user->detail->city = $details['city'];
        $inserted_user->detail->first_next_of_kin_name = $details['first_next_of_kin_name'];
        $inserted_user->detail->first_next_of_kin_phone = $details['first_next_of_kin_phone'];
        $inserted_user->detail->first_next_of_kin_ralationship = $details['first_next_of_kin_ralationship'];
        $inserted_user->detail->second_next_of_kin_name = $details['second_next_of_kin_name'];
        $inserted_user->detail->second_next_of_kin_phone = $details['second_next_of_kin_phone'];
        $inserted_user->detail->second_next_of_kin_ralationship = $details['second_next_of_kin_ralationship'];
        $inserted_user->detail->save();

        return response()->json($inserted_user);
    }

    public function userDetails(Request $request)
    {
        info($request->all());
        info($request->First_Name);
     return 'success';
    $data = $request->all();

//
//        'Personal_Details' => NULL,
//  'First_Name' => 'Jane',
//  'Last_Name' => 'Ja',
//  'Email' => 'jj@gmail.com',
//  'Mpesa_Phone_Number_to_receive_the_amount' => '0704522671',
//  'ID_Number' => '30156964',
//  'Residential_location' => 'westlands',
//  'Building_Name' => 'Buiding001',
//  'House_Number' => 'hs001',
//  'Loan_Details' => NULL,
//  'Purpose_of_loan' => 'Grow Business',
//  'Occupation_Source_of_Income' => 'Self-Employed',
//  'Select_your_Employment_Industry_' => 'Entertainment',
//  'Select_your_income_frequency' => 'Weekly',
//  'Select_your_income_range' => '40,001 - 50,000',
//  'Emergency_Family_Contact' => NULL,
//  '(Emergency_Family_Contact_Info_1)' => NULL,
//  'First_next_of_Kin_Full_Names_' => 'winnie',
//  'First_next_of_Kin_Phone_Number' => '07034',
//  'First_next_of_Kin_Relationship_with_Family_contact_' => 'Parent',
//  'Second_next_of_Kin_Full_Names_' => 'joshua',
//  'Second_next_of_Kin_Phone_Number' => '034564567',
//  'Second_next_of_Kin_Relationship_with_Family_contact_' => 'Colleague',
//  'Guarantor' => NULL,
//  'Guarantor_Full_Names_' => 'wow',
//  'Guarantor_Phone_Number' => '072343566',
//  'Guarantor_Residence' => 'kolanya',
//  'Documents' => NULL,
//  'Upload_your_clear_National_ID_front_and_back_' => NULL,
//  'Upload_your_6_Months_Mpesa_statement_' => NULL,
//  'No_Label_field_48639ac' => 'on',
//  'Date' => 'March 9, 2022',
//  'Time' => '6:08 am',
//  'Page_URL' => 'https://wwwww.flexpay.co.ke/loan-details/',
//  'User_Agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
//  'Remote_IP' => '41.60.238.26',
//  'Powered_by' => 'Elementor',
//  'form_id' => '2a6d252',
//  'form_name' => 'FLEX-LOAN',
//)

   $user = array(
       'flex_user_id' => $data['user_id'],
       'first_name' => $data['first_name'],
       'last_name' => $data['last_name'],
       'phone' => $data['phone_number_1'],
       'role_id' => 2,
       'dob' => $data['dob'],
       'password' => Hash::make("password"),
   );
   $user_inserted = User::create($user);
        //dd($data['total_score']);
   $score = array(
     'user_id' => $user_inserted->id,
     'total_score' => $data['current_score']['total_score'] ,
     'total_score_value' => $data['current_score']['total_score_value'],
     'score_type' => $data['current_score']['score_type'],
     'score_reason' => $data['current_score']['score_reason'],
     'score_description' => $data['current_score']['score_description']
   );

  UserCreditScore::create($score);
  response()->json("success");
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect("users.index");
    }
}
