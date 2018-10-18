<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentingHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renting_history', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamp( 'checkout_time');
            $table->timestamp( 'checkin_time')->nullable();

            //Foreign Keys
            $table->integer( 'user_id')->unsigned();
            $table->integer( 'disc_id')->unsigned();

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
        Schema::dropIfExists('renting_history');
    }
}
