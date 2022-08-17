<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvats', function (Blueprint $table) {
            $table->id();
            $table->double('fvat');
            $table->timestamps();
        });

        $data = [
            ['fvat'=> 0.075, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]
        ];

        DB::table('tvats')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tvats');
    }
}
