<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateTableAadharRegistrationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aadhar_registrations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('existing_aadhar_number')->nullable();
            $table->bigInteger('aadhar_number');
            $table->string('entrepreneur_name',255);
            $table->unsignedBigInteger('social_category_id')->nullable();
            $table->string('gender',255)->nullable();
            $table->boolean('is_handicapped')->nullable();
            $table->string('business_name',255);
            $table->unsignedBigInteger('organization_type_id');
            $table->string('pan_number',255);
            $table->bigInteger('mobile');
            $table->string('email',255);
            $table->date('commencement_date');
            $table->bigInteger('bank_account_number');
            $table->string('ifsc_code',255);
            $table->string('business_activity_type',255);
            $table->unsignedBigInteger('nic_code_id');
            $table->text('about_business')->nullable();
            $table->integer('employee_count');
            $table->integer('investment_in_plant');
            $table->string('aadhar_image',255)->nullable();
            $table->string('gstin_number',255)->nullable();
            $table->boolean('is_gem')->nullable();
            $table->boolean('is_treds')->nullable();
            $table->float('fees', 8, 2)->default(1299.00);
            $table->boolean('status')->default(false);
            $table->text('payment_gateway_data')->nullable();
            $table->integer('form_type')->nullable();
            $table->timestamps();
        });

        Schema::table('aadhar_registrations', function($table) {
            $table->foreign('social_category_id')->references('id')->on('social_categories')->onUpdate('cascade');
            $table->foreign('organization_type_id')->references('id')->on('organization_types')->onUpdate('cascade');
            $table->foreign('nic_code_id')->references('id')->on('nic_codes')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aadhar_registrations');
    }
}
