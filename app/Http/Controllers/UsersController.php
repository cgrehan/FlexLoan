<?php

namespace App\Http\Controllers;

use App\User;
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
        return inertia("users/Index",['users'=>User::all()]);
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
        $detail->credit_score_id = 6;
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
    return  inertia("users/Edit",['user_detail'=>User::with('detail')->find($id)]);
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
        $inserted_user->detail->credit_score_id = 6;
        $inserted_user->detail->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
