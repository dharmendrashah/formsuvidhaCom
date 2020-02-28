<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_addres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('userID');
            $table->text('localAddOne');
            $table->text('localAddTwo')->nullable();
            $table->text('localCityVillage');
            $table->text('district');
            $table->text('state');
            $table->text('pinZipCode');
            $table->text('country');
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
        Schema::dropIfExists('local_addresses');
    }
}
