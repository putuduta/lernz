<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBomRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bom_recruitments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('buept_score');
            $table->string('buept_score_proof');
            $table->string('division_preference1');
            $table->string('division_preference1_reason');
            $table->string('division_preference2');
            $table->string('division_preference2_reason');
            $table->string('division_preference3');
            $table->string('division_preference3_reason');
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
        Schema::dropIfExists('bom_recruitments');
    }
}
