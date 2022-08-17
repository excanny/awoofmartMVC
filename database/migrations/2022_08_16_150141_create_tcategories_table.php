<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcategories', function (Blueprint $table) {
            $table->id();
            $table->string('fdomain_name');
            $table->string('fcategory_name');
            $table->bigInteger('fparent_id');
            $table->string('fparent_name');
            $table->string('fdescription');
            $table->string('fimage_name');
            $table->boolean('fallow_merchant_upload');
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
        Schema::dropIfExists('tcategories');
    }
}