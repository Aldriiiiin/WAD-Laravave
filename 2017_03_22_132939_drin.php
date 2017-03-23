<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mudels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name' , 100);
            $table->string('email_add' , 100);
            $table->string('user_name' , 100);
            $table->string('pass' , 100);
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
        Schema::dropIfExists('mudels');
    }
}
