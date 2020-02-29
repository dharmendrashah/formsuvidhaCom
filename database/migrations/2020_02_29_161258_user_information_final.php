<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInformationFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userFinalInformation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('userID');
            $table->text('fullname');
            $table->text('fatherName');
            $table->text('Mothername');
            $table->text('dobdate');
            $table->text('dobmonth');
            $table->text('dobYear');
            $table->text('caste');
            $table->text('casteCertificateIs');
            $table->text('emailAddress');
            $table->text('gender');
            $table->text('handiCappedStatus');
            $table->text('nationality');
            $table->text('state');
            $table->text('district');
            $table->text('Block')->nullable();
            $table->text('tahsil')->nullable();
            $table->text('village')->nullable();
            $table->text('maritalStatus');
            $table->text('spouseName')->nullable();
            $table->text('children')->nullable();
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
        Schema::dropIfExists('userFinalInformation');
    }
}
