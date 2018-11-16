<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc', function (Blueprint $table) {
            $table->increments('id');
			
			//Foreign Keys
			$table->integer( 'movie_id')->unsigned();
			$table->integer( 'kiosk_id')->unsigned();
			
			$table->enum('disc_type', ['dvd', 'blu_ray']);
			
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
        Schema::dropIfExists('disc');
    }
}
