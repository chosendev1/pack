<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldsToGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guarantors', function (Blueprint $table) {
            //$table->dropColumn('permanent_address');
            $table->string('gender')->after('relationship_to_applicant');
            $table->string('nationality')->after('gender');
            $table->string('email_address')->after('mobile_no2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guarantors', function (Blueprint $table) {
            dropColumn('gender');
            dropColumn('nationality');
            dropColumn('email_address');
        });
    }
}
