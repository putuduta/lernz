<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('toefl_id');
            $table->string('role')->default('USER');
            $table->string('name');
            $table->string('nim')->unique();
            $table->string('ticket_number')->unique();
            $table->string('password');
            $table->integer('member_payment')->default('-2');
            $table->integer('wp_registration')->default('-1');
            $table->string('wp_shift')->nullable();
            $table->integer('wp_attendance')->default('-1');
            $table->integer('bom_registration')->default('-1');
            $table->integer('talent_registration')->default('-1');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
