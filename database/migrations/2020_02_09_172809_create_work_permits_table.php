<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkPermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_permits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('expatriaes_name');
            $table->string('china_name');
            $table->string('occupation');
            $table->unsignedBigInteger('country_id')->index();
            $table->string('gender');
            $table->string('dob');
            $table->string('placeofissue');
            $table->string('website_name');
            $table->string('company_name');
            $table->string('company_name_chinese');
            $table->string('visa_no');
            $table->string('visa_issue_date');
            $table->string('visa_expiry_date');
            $table->string('passport_no');
            $table->string('passport_issue_date');
            $table->string('passport_expiry_date');
            $table->string('duration');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
        Schema::dropIfExists('work_permits');
    }
}
