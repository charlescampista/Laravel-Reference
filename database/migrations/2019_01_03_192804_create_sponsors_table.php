<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('Sponsor', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('image');
        //     $table->string('description');
        //     $table->string('country');
        //     $table->string('slogan');
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
      //  Schema::dropIfExists('Sponsor');
    }
}
