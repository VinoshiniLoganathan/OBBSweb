<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampDonorRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_donor_register', function (Blueprint $table) {
            $table->increments('id');
            $table->string('camp_id');
            $table->string('camp_place');
            $table->date('camp_date');
            $table->time('camp_time');
            $table->string('donor_id');
            $table->string('donor_name');
            $table->string('donor_phone');
            $table->string('donor_bloodgroup');
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
        Schema::dropIfExists('camp_donor_register');
    }
}
