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
            $table->integer('company_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->integer('loan_applications_id')->unsigned();
            $table->decimal('principal_paid',13,4)->default(0);
            $table->decimal('interest_paid',13,4)->default(0);
            $table->decimal('penalty_paid',13,4)->default(0);
            $table->date('payment_date');
            $table->string('receipt_number')->unique()->nullable();
            $table->string('cheque_number')->unique()->nullable();
            //$table->interger('user_id');
            $table->string('bank_name')->nullable();
            $table->string('payment_method');
            $table->softDeletes();
            $table->timestamps();
            /*$table->foreign('loan_applications_id')->references('id')
                ->on('loan_applications')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('company_id')->references('id')->on('companies')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')
                ->onDelete('cascade')->onUpdate('cascade');*/
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
