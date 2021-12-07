<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->text('reason');
            $table->float('loan_amount')->nullable();
            $table->dateTime('due_date');
            $table->float('interest_rate');
            $table->float('repayment_amount');
            $table->float('amount_paid_todate');
            $table->dateTime('approved_date')->nullable();
            $table->boolean('disbursement_status')->default(0);
            $table->boolean('has_completed_repayment')->default(0);
            $table->bigInteger('booking_id')->nullable();
            $table->bigInteger('disbursement_id')->nullable();
            $table->foreignId("user_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("loan_type_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('loans');
    }
}
