<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('registration_id');
            $table->string('registration_name');
            $table->string('registration_type');
            $table->string('registration_email');
            $table->string('registration_line_id');
            $table->string('registration_phone_number');
            $table->string('registration_bankName');
            $table->string('registration_bankaccount_name');
            $table->string('registration_bankaccount_number');
            $table->string('registration_transfer_proof');
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
        Schema::dropIfExists('registrations');
    }
}
