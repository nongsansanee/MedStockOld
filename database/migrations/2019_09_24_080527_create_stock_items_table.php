<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\stock_item;

class CreateStockItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stocks_id');
            $table->integer('stock_categories_id')->nullable();
            $table->string('item_code');
            $table->string('item_name');
            $table->integer('unit_counts_id');
            $table->integer('item_receive');
            $table->date('date_receive');
            $table->date('date_expire');
            $table->float('price');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
        stock_item::loadData('data_stock_item');

   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_items');
    }
}
