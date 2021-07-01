<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTheloaiToTenmayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenmay', function (Blueprint $table) {
            $table->unSignedInteger('TL_id')->after('Ten_may')->nullable();
            $table->foreign('TL_id')->references('id')->on('theloai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenmay', function (Blueprint $table) {
            //
        });
    }
}
