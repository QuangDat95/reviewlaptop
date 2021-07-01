<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTenmayToNoidungTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('noidung', function (Blueprint $table) {
            $table->unsignedInteger('tenmay_id')->after('noi_dung')->nullable();
            $table->foreign('tenmay_id')->references('id')->on('tenmay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noidung', function (Blueprint $table) {
            //
        });
    }
}
