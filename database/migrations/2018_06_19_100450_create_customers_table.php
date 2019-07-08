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
            $table->integer('company_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->string('name_of_applicant');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('spouses_name');
            $table->string('gender');
            $table->string('nationality');
            $table->string('association_id_number');
            $table->string('permanent_address');
            $table->string('mobile_no1')->unique();
            $table->string('mobile_no2')->unique()->nullable();
            $table->string('member_number')->unique();
            $table->string('maritual_status');
            $table->string('date_of_birth');
            $table->string('stage_of_operation');
            $table->string('motor_cycle_no_plate');
            $table->string('closet_land_mark');
            $table->text('other_sources_of_income');
            $table->softDeletes();
            $table->timestamps();
            /*$table->foreign('company_id')->references('id')->on('companies')
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
        //Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('customers');
    }
}
