<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('ModelArtist', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('age');
        //     $table->string('image');
        //     $table->string('description');
        //     $table->string('city');
        //     $table->string('country');
        //     $table->string('ethnicity');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('ModelArtist');
    }
}