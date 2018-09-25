<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentFrequencyFromLoanProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_products', function (Blueprint $table) {
            $table->string('payment_frequency',20)->after('interest_rate')->default('monthly');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*public function down()
    {
        Schema::table('loan_products', function (Blueprint $table) {
            //
        });
    }*/
}
