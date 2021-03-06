<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bf');
            $table->string('title');
            $table->string('name');
            $table->string('path');
            $table->string('url')->nullable();
            $table->enum('status', ['Y', 'N'])->default('N');
            $table->enum('type', ['a', 'b','c']);
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
        Schema::dropIfExists('tb_sections');
    }
}
