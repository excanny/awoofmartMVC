<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpackagingcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpackaging_costs', function (Blueprint $table) {
            $table->id();
            $table->string('fparent_category_name');
            $table->string('fsub_category_name');
            $table->string('fchild_category_name');
            $table->double('fvolume');
            $table->string('fmaterial');
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
        Schema::dropIfExists('tpackaging_costs');
    }
}
