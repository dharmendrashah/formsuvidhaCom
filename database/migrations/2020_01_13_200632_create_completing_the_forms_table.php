<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompletingTheFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completing_the_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('session');
            $table->text('ip');
            $table->text('userID');
            $table->text('stepsHasToClear');
            $table->text('vacancy');
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
        Schema::dropIfExists('completing_the_forms');
    }
}
