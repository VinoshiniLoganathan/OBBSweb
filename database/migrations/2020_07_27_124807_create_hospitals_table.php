<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('hospitals')){
            Schema::create('hospitals', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('staffID')->unique();
                $table->string('phone');
                $table->string('hospName');
                $table->string('email')->unique();
                $table->string('password');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
