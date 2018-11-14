<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc_rentals', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('disc_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->dateTime('rentalDate');
            $table->dateTime('returnDate')->nullable();

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
        Schema::dropIfExists('disc_rentals');
    }
}
