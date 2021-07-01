<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhnangSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenmay_tinhnang', function (Blueprint $table) {
            $table->integer('tenmay_id')->unsigned();
            $table->foreign('tenmay_id')->references('id')->on('tenmay');
            $table->integer('tinhnang_id')->unsigned();
            $table->foreign('tinhnang_id')->references('id')->on('tinhnang');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinhnang_sanpham');
    }
}
