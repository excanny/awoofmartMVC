<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTlandmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tlandmarks', function (Blueprint $table) {
            $table->id();
            $table->string('flandmark_name');
            $table->string('farea_name');
            $table->string('fcity_name');
            $table->string('fdescription');
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
        Schema::dropIfExists('tlandmarks');
    }
}
