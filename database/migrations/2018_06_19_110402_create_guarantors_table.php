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
            $table->string('name_of_guarantor');
            $table->string('relationship_to_applicant');
            $table->string('religion');
            $table->string('stage_of_operation');
            $table->string('mobile_no1');
            $table->string('mobile_no2');
            $table->string('date_of_birth');
            $table->string('residential_address');
            $table->string('permanent_address');
            $table->string('marital_status');
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
        Schema::dropIfExists('guarantors');
    }
}
