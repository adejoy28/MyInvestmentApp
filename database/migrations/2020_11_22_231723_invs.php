<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('investeds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount_invested');
            $table->bigInteger('acc_no');
            $table->bigInteger('period');
            $table->string('bank');
            $table->string('acc_name');
            $table->bigInteger('roi_percent')->default(20);
            $table->date('date_invested')->nullable();
            $table->unsignedBigInteger('user_id')->default(1);
            $table->date('date_due')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedBigInteger('plan_id')->default(1);
            // $table->foreign('plan_id')->references('id')->on('plans');
            $table->boolean('status')->default(2);
            $table->bigInteger('paid')->default(1);
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
        //
    }
}
