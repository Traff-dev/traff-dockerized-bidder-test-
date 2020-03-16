<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('iabCategory');
            $table->string('imgContainer');
            $table->string('cur');
            $table->integer('sizeW');
            $table->integer('sizeH');
            $table->decimal('cpm', 12, 5);
            $table->integer('pos');
            $table->string('targetGender');
            $table->integer('targetAgeMin');
            $table->integer('targetAgeMax');
            $table->integer('clicks');
            $table->boolean('status');
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
        Schema::dropIfExists('creatives');
    }
}
