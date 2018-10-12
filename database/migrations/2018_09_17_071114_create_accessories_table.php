<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accessory_name');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('model_no')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('quantity')->nullable();
            $table->string('min_qty')->nullable();
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
        Schema::dropIfExists('accessories');
    }
}
