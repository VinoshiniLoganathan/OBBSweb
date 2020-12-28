<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodBagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_bag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bbag_id');
            $table->string('donor_id');
            $table->string('donor_name');
            $table->string('donor_bloodgroup');
            $table->string('donor_bloodRh');
            $table->string('bbag_vol');
            $table->string('bbag_comp');
            $table->date('received_date');
            $table->date('expiry_date');
            $table->string('camp_id');
            $table->string('hosp_name');
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
        Schema::dropIfExists('blood_bag');
    }
}
