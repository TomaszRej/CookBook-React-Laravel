<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('ingredients')->nullable();
            $table->string('instructions')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('hotLvl')->nullable();
            $table->integer('timeToPrepere')->nullable();
            $table->boolean('isVegatarian')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
