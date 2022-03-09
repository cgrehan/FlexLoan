<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/walla',function (){
   return view('welcome');
});

//Login
//Route::get('login','LoginController@sign')->name('login')->middleware("guest");
//Route::post('signin-post','LoginController@postLogin')->name('signin.post');
//Route::post('signout-user','LoginController@signoutUser')->name('signout.index');

Route::group(['middleware' => ['auth']],function (){
    Route::get('', 'DashboardController@index')->name("dashboard.index");
    Route::get('dashboard', 'DashboardController@index')->name("dashboard.index");

    Route::resource("loan-types","LoanTypesController");

    Route::resource("credit-score-types","CreditScoreTypesController");
    Route::resource("credit-scores","CreditScoresController");
    Route::resource("interest-types","InterestTypesController");
    Route::resource("interests","InterestsController");
    Route::resource("penality-types","PenalityTypesController");
    Route::resource("penalities","PenalityController");
    Route::resource("users","UsersController");
    Route::get("users-uncompleted","UsersController@uncompletedProfile")->name("users-uncompleted");
    Route::resource("loan-stages","LoanStagesController");
    Route::prefix("loans")->group(function (){
        Route::resource("loans","LoansController");
        Route::get("approved","LoansController@index")->name("loans.approved");
        Route::get("pending","LoansController@pending")->name("loans.pending");
        Route::get("rejected","LoansController@rejected")->name("loans.rejected");
        Route::get("completed","LoansController@completed")->name("loans.completed");
        Route::get("active","LoansController@active")->name("loans.active");
        Route::get("overdue","LoansController@overdue")->name("loans.overdue");

    });
    Route::post("loan-update","LoansController@updateLoan");

    Route::get('register','Auth\RegisterController@showRegisterForm')->name('register.user');
    Route::post('register-new','Auth\RegisterController@create')->name('register.user.new');
});





