<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('postName');
            $table->text('aboutPost');
            $table->text('applicable');
            $table->text('formStart');
            $table->text('formEnd');
            $table->text('lastDate');
            $table->text('admitCard');
            $table->text('examdate');
            $table->text('feesCategoryUp');
            $table->text('feesCategoryDown');
            $table->text('female');
            $table->text('paymentMethod');
            $table->text('totalPost');
            $table->text('postForMale');
            $table->text('postForFemale');
            $table->text('educationEligibility');
            $table->text('ageLimit');
            $table->text('reserveForMaleGeneral');
            $table->text('reserveForMaleObc');
            $table->text('reserveForMaleEws');
            $table->text('reserveForMaleSc');
            $table->text('reserveForMaleSt');
            $table->text('reserveForFemaleGeneral');
            $table->text('reserveForFemaleObc');
            $table->text('reserveForFemaleEws');
            $table->text('reserveForFemaleSc');
            $table->text('reserveForFemaleSt');
            $table->text('maleHeight');
            $table->text('maleChest');
            $table->text('maleRunning');
            $table->text('maleLongJump');
            $table->text('maleHighJump');
            $table->text('femaleHeight');
            $table->text('femaleChest');
            $table->text('femaleRunning');
            $table->text('femaleLongJump');
            $table->text('femaleHighJump');
            $table->text('linkofRegistration');
            $table->text('lonkoflogin');
            $table->text('linkOfofficialNotification');
            $table->text('linkOfofficialWebsite');
            $table->text('informationRequire');
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
        Schema::dropIfExists('vacancies');
    }
}
