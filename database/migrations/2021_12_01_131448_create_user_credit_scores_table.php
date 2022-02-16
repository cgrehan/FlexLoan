<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCreditScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_credit_scores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->float("total_score");
            $table->float("total_score_value");
            $table->string("score_type")->nullable();
            $table->string("score_reason")->nullable();
            $table->string("score_description")->nullable();
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
        Schema::dropIfExists('user_credit_scores');
    }
}
