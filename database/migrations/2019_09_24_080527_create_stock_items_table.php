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
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        $stock_items = array(
            ['stocks_id' => 2, 'item_code' => '111111' ,'item_name' => 'Pipette Tip 200 ul' ,'unit_counts_id' => 4,'item_receive' => 10 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111112' ,'item_name' => 'Pipette Tip 1,000 ul' ,'unit_counts_id' => 4,'item_receive' => 5 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111113' ,'item_name' => 'Lamda FITC' ,'unit_counts_id' => 5,'item_receive' => 7 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111114' ,'item_name' => 'กล่องพลาสติกใส่ Tube 1.5 ml.' ,'unit_counts_id' => 5,'item_receive' => 12 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111115' ,'item_name' => 'aaaaaaaaaaaaaaa' ,'unit_counts_id' => 7,'item_receive' => 2 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111116' ,'item_name' => 'bbbbbbbb ' ,'unit_counts_id' => 1,'item_receive' => 8 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111117' ,'item_name' => 'ccccccccccccc' ,'unit_counts_id' => 2,'item_receive' => 10 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111118' ,'item_name' => 'eeeeeeeeeee' ,'unit_counts_id' => 1,'item_receive' => 15 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111119' ,'item_name' => 'fffffffffffffffff' ,'unit_counts_id' => 3,'item_receive' => 22 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23'],
            ['stocks_id' => 2, 'item_code' => '111120' ,'item_name' => 'ggggggggggggggg' ,'unit_counts_id' => 4,'item_receive' => 9 ,'date_receive'=>'2019-10-03','date_expire'=>'2019-10-23']
        );

        foreach($stock_items as $stock_item){
            stock_item::create($stock_item);
        }
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
