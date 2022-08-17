<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titems', function (Blueprint $table) {
            $table->id();
            $table->string('fitem_id');
            $table->string('fitem_name');
            $table->string('fitem_image_name');
            $table->string('fsku_name');
            $table->float('fsku_weight');
            $table->string('fdescription');
            $table->string('fmarket_domain_name');
            $table->string('fbrand_name');
            $table->string('fparent_category_name');
            $table->string('fsub_category_name');
            $table->string('fchild_category_name');
            $table->boolean('featured')->default(0);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('titems');
    }
}