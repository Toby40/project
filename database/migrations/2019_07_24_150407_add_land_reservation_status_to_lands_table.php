<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLandReservationStatusToLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lands', function (Blueprint $table) {
            //
            $table->boolean('reservation_status')->default(0)->after('land_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lands', function (Blueprint $table) {
            //
            $table->dropColumns(['reservation_status']);
        });
    }
}
