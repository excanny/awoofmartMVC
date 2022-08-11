<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTsalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsales_details', function (Blueprint $table) {
            $table->id();
            $table->string('fmerchant_id');
            $table->string('fbuyer_id');
            $table->decimal('fprice');
            $table->string('forder_id');
            $table->string('fproduct_id');
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
        Schema::dropIfExists('tsales_details');
    }
}
