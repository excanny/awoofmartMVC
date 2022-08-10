<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmerchants', function (Blueprint $table) {
            $table->id();
            $table->string('ffirst_name');
            $table->string('flast_name');
            $table->string('fdob');
            $table->string('fshop_name');
            $table->string('fshop_id');
            $table->string('fcity_name');
            $table->string('farea_name');
            $table->string('fland_mark');
            $table->string('fshop_address');
            $table->string('femail');
            $table->string('fphone');
            $table->string('fbank_name');
            $table->string('faccount_no');
            $table->string('faccount_name');
            $table->string('fpass_word');
            $table->string('fcheck');
            $table->string('ftoken');
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
        Schema::dropIfExists('tmerchants');
    }
}
