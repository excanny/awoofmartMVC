<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTshippingcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tshipping_costs', function (Blueprint $table) {
            $table->id();
            $table->decimal('fweight');
            $table->string('fparent_category_name');
            $table->string('fsub_category_name');
            $table->string('fchild_category_name');
            $table->string('fsource_location');
            $table->string('fdelivery_location');
            $table->double('fdelivery_timeline');
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
        Schema::dropIfExists('tshipping_costs');
    }
}