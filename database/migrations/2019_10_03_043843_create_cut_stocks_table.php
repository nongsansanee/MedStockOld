<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\cut_stock;

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
            $table->integer('stock_categories_id')->nullable();
            $table->integer('item_code');
            $table->integer('item_use');
            $table->date('date_use');
            $table->time('time_use');
            $table->string('userin');
            $table->timestamps();
        });

        $cut_stocks = array(
            ['stock_id' => 2, 'item_code' => '111111' ,'item_use' => 1 ,'date_use' => '2019-10-03','time_use' => '10:15:20' ,'userin'=>'100356479'],
            ['stock_id' => 2, 'item_code' => '111111' ,'item_use' => 2 ,'date_use' => '2019-10-03','time_use' => '10:16:20' ,'userin'=>'100356479'],
            ['stock_id' => 2, 'item_code' => '111112' ,'item_use' => 1 ,'date_use' => '2019-10-03','time_use' => '10:20:20' ,'userin'=>'100356479'],
            ['stock_id' => 2, 'item_code' => '111115' ,'item_use' => 1 ,'date_use' => '2019-10-03','time_use' => '11:15:20' ,'userin'=>'100356479'],
        );

        foreach($cut_stocks as $cut_stock){
            cut_stock::create($cut_stock);
        }
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
