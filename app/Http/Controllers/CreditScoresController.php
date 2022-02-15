<?php

namespace App\Http\Controllers;

use App\CreditScore;
use App\CreditScoreType;
use Illuminate\Http\Request;

class CreditScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view("creditscores/index",['scores'=>CreditScore::with('type')->get(),'types'=>CreditScoreType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('creditscores/Create',['types'=>CreditScoreType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['credit_score_type_id'=>['unique:credit_scores,credit_score_type_id','unique:credit_scores,points']]);

        CreditScore::create($request->all());
        return redirect()->route('credit-scores.index');
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
      return inertia('creditscores/Edit',['score'=>CreditScore::find($id),'types'=>CreditScoreType::all()]);
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
        $request->validate([
            'credit_score_type_id'=>'unique:credit_scores,credit_score_type_id,'.$id,
            'points'=>'unique:credit_scores,points,'.$id
        ]);

        CreditScore::find($id)->update($request->all());
        return redirect()->route('credit-scores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CreditScore::destroy($id);
        return redirect()->route('credit-scores.index');
    }
}
