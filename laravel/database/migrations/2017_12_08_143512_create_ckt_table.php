<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ckt', function (Blueprint $table) {
            $table->increments('ckt_id_cocktail');
            $table->string('ckt_st_name', 45);
            $table->string('ckt_st_recipe');
            $table->string('ckt_st_serve', 45);
            $table->string('ckt_st_category', 45);
            $table->unsignedInteger('ckt_id_user');
            $table->foreign('ckt_id_user')->references('usr_id_user')->on('usr');
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
        Schema::dropIfExists('ckt');
    }
}
