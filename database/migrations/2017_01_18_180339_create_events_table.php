<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisername');
            $table->string('organiseremail');
            $table->string('title');
            $table->string('url');
            $table->string('city');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->date('date');
            $table->time('starttime');
            $table->boolean('approved')->default(0);
            $table->boolean('expired')->default(0);
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
        Schema::dropIfExists('events');
    }
}
