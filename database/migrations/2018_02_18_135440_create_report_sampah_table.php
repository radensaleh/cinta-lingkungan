<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_trash', function (Blueprint $table) {
            $table->increments('id_complaint');
            $table->string('no_ktp');
            $table->string('id_trash');
            $table->string('desc_complaint');
            $table->binary('photo_complaint');
            $table->string('location');
            $table->date('date_complaint');
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
        Schema::dropIfExists('report_sampah');
    }
}
