<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_applicant');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('spouses_name');
            $table->string('gender');
            $table->string('nationality');
            $table->string('association_id_number');
            $table->string('permanent_address');
            $table->string('mobile_no1');
            $table->string('mobile_no2');
            $table->string('member_number');
            $table->string('maritual_status');
            $table->string('date_of_birth');
            $table->string('stage_of_operation');
            $table->string('motor_cycle_no_plate');
            $table->string('closet_land_mark');
            $table->text('other_sources_of_income');
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
        Schema::dropIfExists('customers');
    }
}
