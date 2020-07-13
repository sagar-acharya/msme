<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateTableAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('house_number',255);
            $table->string('premise',255);
            $table->string('road',255);
            $table->string('area',255);
            $table->string('city',255);
            $table->integer('pin');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('aadhar_registration_id');
            $table->string('district',255);
            $table->boolean('is_office_address_same')->default(TRUE);
            $table->timestamps();
        });

        Schema::table('addresses', function($table) {
            $table->foreign('aadhar_registration_id')->references('id')->on('aadhar_registrations')->onUpdate('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
