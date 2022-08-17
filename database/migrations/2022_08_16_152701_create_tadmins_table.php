<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tadmins', function (Blueprint $table) {
            $table->id();
            $table->string('ffirst_name');
            $table->string('flast_name');
            $table->string('femail');
            $table->string('fphone');
            $table->string('fpass_word');
            $table->tinyInteger('frole_id');
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
        Schema::dropIfExists('tadmins');
    }
}