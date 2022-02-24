<?php

namespace App\Http\Controllers;

use App\Loan;
use App\LoanType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("loans/index",['loans'=>Loan::where('status','approved')->get()]);
    }

    public function rejected()
    {
        return view("loans/rejected",['loans'=>Loan::where('status','Rejected')->get()]);
    }

    public function pending()
    {
        return view("loans/pending",['loans'=>Loan::where('status','Pending')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('loans/Create',['types' => LoanType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    public function updateLoan(Request  $request)
    {
        Loan::find($request->id)->update(['status'=>$request->status]);
        if ($request->status =='Approved'){
            Loan::find($request->id)->update(['loan_status'=>'active','approved_date'=>Carbon::now(),'due_date'=>Carbon::now()->addDays(30)]);
        }

        return response($request->all());
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
        info('cool');
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
