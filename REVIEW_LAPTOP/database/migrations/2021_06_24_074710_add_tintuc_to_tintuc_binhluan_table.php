<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTintucToTintucBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tintuc_binhluan', function (Blueprint $table) {
            $table->unsignedInteger('tintuc_id')->after('tintuc_binhluan')->nullable();
            $table->foreign('tintuc_id')->references('id')->on('tintuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tintuc_binhluan', function (Blueprint $table) {
            //
        });
    }
}
