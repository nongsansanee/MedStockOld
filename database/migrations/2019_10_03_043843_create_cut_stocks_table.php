<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cut_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stock_id');
            $table->integer('item_code');
            $table->date('date_use');
            $table->time('time_use');
            $table->integer('item_use');
            $table->string('userin');
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
        Schema::dropIfExists('cut_stocks');
    }
}
