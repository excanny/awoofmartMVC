<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcities', function (Blueprint $table) {
            $table->id('frecno');
            $table->string('fcity_name', 100);
            $table->string('fcity_description', 250);
            $table->timestamps();
        });

        $data = [
            ['fcity_name'=> 'Ilorin', 'fcity_description' => 'Ogbomoso/Ilorin/Omuaran/Egbe/Jebba/Mokwa Environs', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['fcity_name'=> 'Osogbo', 'fcity_description' => 'Osogbo/Ede/Ikirun/Ilesha/Ile-Ife Environs', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('tcities')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tcities_');
    }
}
