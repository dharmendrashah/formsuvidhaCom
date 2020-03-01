<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDocumentsUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userDetailDocumentsUpload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('userID');
            $table->text('passPic');
            $table->text('hindiSignature');
            $table->text('englishSignature');
            $table->text('leftThumbprint');
            $table->text('rightThumbprint');
            $table->text('aadharcardpic');
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
        //
    }
}
