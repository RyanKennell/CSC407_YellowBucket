<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title', 64);
			$table->string('coverPhoto', 64)->nullable();
			$table->string('description', 1024)->nullable();
            $table->string('rating',16)->nullable();
            $table->integer('length')->nullable();

            //Foreign Key
            $table->integer('genreID')->nullable(); 
            $table->boolean('onDVD')->nullable();
            $table->boolean('onBlueRay')->nullable();
             $table->string('Action', 1024)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('movies');
    }
}
