<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProofOfAddressAndWeeklyIncomeToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->boolean('has_proof_of_address')->after('closet_land_mark')->default(0);
            $table->string('email_address')->after('mobile_no2');
            $table->text('gross_weekly_income')->after('has_proof_of_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            dropColumn('has_proof_of_address');
            dropColumn('email_address');
            dropColumn('gross_weekly_income');
        });
    }
}
