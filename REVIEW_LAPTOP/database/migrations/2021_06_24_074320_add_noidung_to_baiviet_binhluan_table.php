<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoidungToBaivietBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baiviet_binhluan', function (Blueprint $table) {
            $table->unsignedInteger('noidung_id')->after('binh_luan')->nullable();
            $table->foreign('noidung_id')->references('id')->on('noidung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baiviet_binhluan', function (Blueprint $table) {
            //
        });
    }
}
