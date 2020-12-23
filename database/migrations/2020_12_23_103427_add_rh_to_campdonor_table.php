<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRhToCampdonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('camp_donor_register', function (Blueprint $table) {
            $table->string('donor_bloodRh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('camp_donor_register', function (Blueprint $table) {
            $table->dropColumn('donor_bloodRh');
        });
    }
}
