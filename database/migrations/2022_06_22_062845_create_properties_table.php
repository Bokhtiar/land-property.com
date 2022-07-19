<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('property_id');
            $table->string('title')->require();
            $table->longText('body')->require();
            $table->string('image');
            $table->integer('category_id')->require();
            $table->string('division_name')->require();
            $table->string('location')->require();
            $table->string('phone')->require();
            $table->integer('sell')->default(1);
            $table->integer('price');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('properties');
    }
}
