<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenmayTinhnangTable extends Migration
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
            $table->foreign('tenmay_id')->references('id')->on('tenmay')->onDelete('cascade');
            $table->integer('tinhnang_id')->unsigned();
            $table->foreign('tinhnang_id')->references('id')->on('tinhnang')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenmay_tinhnang');
    }
}
