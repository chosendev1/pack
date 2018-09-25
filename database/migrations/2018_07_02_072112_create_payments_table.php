<?php

//use Carbon\Carbon
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_applications_id')->unsigned();
            $table->decimal('total_principal_amount',13,4);
            $table->decimal('total_interest_amount',13,4);
            $table->decimal('total_amount_paid',13,4);
            $table->decimal('principal_amount',13,4)->default(0);
            $table->decimal('interest_amount',13,4)->default(0);
            $table->decimal('penalty_amount',13,4)->nullable();
            $table->decimal('balance_principal',13,4)->storedAs();
            $table->decimal('balance_interest',13,4)->storedAs();
            $table->string('receipt_number')->unique();
            //$table->date('payment_date')->default(Carbon::now()->toDateString());
            $table->date('payment_date');
            $table->string('payment_type')->default('cash');
            //$table->foreign_key('loan_applications_id')->references('id')->on(loan_applications)
             //     ->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('payments');
    }
}
