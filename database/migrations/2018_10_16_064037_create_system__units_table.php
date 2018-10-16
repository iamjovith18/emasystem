<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system__units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('asset_tag')->nullable();
            $table->integer('total')->default(1);
            $table->integer('order_qty')->default(0);
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
        Schema::dropIfExists('system__units');
    }
}
