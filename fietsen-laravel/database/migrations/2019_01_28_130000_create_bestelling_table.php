<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBestellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            {
                Schema::create('bestelling', function (Blueprint $table) {
                    $table->increments('id');
                    $table->unsignedinteger('bikeId');
                    $table->float('prijs');
                    $table->integer('aantal');
                    $table->foreign('bikeId')->references('id')->on('bikes');
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
        Schema::dropIfExists('bestelling');
    }
}
