<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductForProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_for_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ml');
            $table->string('weight');
            $table->string('price');
            $table->string('description');
            $table->string('howtouse');
            $table->string('suitedto');
            $table->string('skinfeel');
            $table->text('keyingredients');
            $table->text('ingredients');
            $table->string('image');
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
        Schema::dropIfExists('product_for_profiles');
    }
}
