<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanDisbursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_disbursements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->bigInteger('loan_applications_id')->unsigned();
            $table->bigInteger('loan_approval_id')->unsigned();
            $table->dateTime('disbursement_date');
            $table->integer('disbursed_by');
            $table->mediumText('disbursement_justification');
            $table->boolean('is_reversed_disbursement')->default(0);
            $table->dateTime('disbursement_reversal_date');
            $table->integer('disbursement_reversed_by');
            $table->mediumText('disbursement_reversal_justification');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_disbursements');
    }
}
