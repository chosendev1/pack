<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->integer('loan_applications_id')->unsigned();
            $table->string('name_of_guarantor');
            $table->string('relationship_to_applicant');
            $table->string('religion');
            $table->string('stage_of_operation');
            $table->string('mobile_no1')->unique();
            $table->string('mobile_no2')->unique()->nullable();
            $table->string('date_of_birth');
            $table->string('residential_address');
            $table->string('permanent_address');
            $table->string('marital_status');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('loan_applications_id')->references('id')
                ->on('loan_applications')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('guarantors');
    }
}
