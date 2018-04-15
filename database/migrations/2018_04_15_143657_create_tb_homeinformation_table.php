<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbHomeinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_homeinformation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keywords');
            $table->string('description');
            $table->string('address');
            $table->string('phone');
            $table->string('url');
            $table->string('bf');
            $table->string('homes');
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
        Schema::dropIfExists('tb_homeinformation');
    }
}
