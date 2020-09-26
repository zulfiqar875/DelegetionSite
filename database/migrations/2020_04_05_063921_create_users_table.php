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
            $table->bigIncrements('id');
            $table->Biginteger('visanumber');
            $table->String('fullname');
            $table->Biginteger('nationalid');
            $table->String('visaembassy');
            $table->Date('date');
            $table->String('sponsoradd');
            $table->Integer('personaccount');
            $table->String('occupation');
            $table->String('nationality');
            $table->String('visaissue');
            $table->Integer('remainingac');
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
