<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tproducts', function (Blueprint $table) {
            $table->id();
            $table->string('fdomain_name');
            $table->string('fmain_category_name');
            $table->string('fsub_category_name');
            $table->string('fchild_category_name');
            $table->string('fitem_name');
            $table->string('fitem_image');
            $table->string('fproduct_id');
            $table->string('fbrand_name');
            $table->decimal('fprice');
            $table->decimal('fnew_price')->nullable();
            $table->integer('fquantity');
            $table->decimal('fpackaging_cost');
            $table->string('fdescription');
            $table->string('fmerchant_id');
            $table->string('fmerchant_city');
            $table->string('fmerchant_area');
            $table->string('fmerchant_landmark');
            $table->integer('fviews');
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
        Schema::dropIfExists('tproducts');
    }
}
