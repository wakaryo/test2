<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rests', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->id('attendance_id');
            //$table->dropPrimary(['attendance_id']);
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
        Schema::table('rests', function (Blueprint $table) {
            $table->unsignedBigInteger('attendance_id');

            $table->foreign('attendance_id')->references('id')->on('attendances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rests');
        //
    }
}
