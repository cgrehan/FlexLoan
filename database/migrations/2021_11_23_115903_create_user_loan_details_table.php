<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLoanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_loan_details', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_employed')->default(0);
            $table->string('salary')->nullable();
            $table->string('other_income')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('first_next_of_kin_name');
            $table->string('first_next_of_kin_phone');
            $table->string('first_next_of_kin_ralationship');
            $table->string('second_next_of_kin_name');
            $table->string('second_next_of_kin_phone');
            $table->string('second_next_of_kin_ralationship');
            $table->foreignId("user_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("credit_score_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_loan_details');
    }
}
