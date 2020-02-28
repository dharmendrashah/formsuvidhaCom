<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BasicDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('userID');
            $table->text('Number');
            $table->text('addOne');
            $table->text('addTwo')->nullable();
            $table->text('cityVilage')->nullable();
            $table->text('district');
            $table->text('state');
            $table->text('pinCode');
            $table->text('eduQualificaton');
            $table->text('otherQualification')->nullable();
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
        Schema::dropIfExists('basic_details');
    }
}
