<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcarts', function (Blueprint $table) {
            $table->id();
            $table->string('fproduct_id');
            $table->string('fmerchant_id');
            $table->string('fshopper_id');  
            $table->decimal('fprice');
            $table->integer('fquantity');                                  
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
        Schema::dropIfExists('tcarts');
    }
}
