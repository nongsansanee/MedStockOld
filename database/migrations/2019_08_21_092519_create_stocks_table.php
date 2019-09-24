<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\stock;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stockname');
            $table->string('stockengname')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        $stocks = array(
            ['stockname' => 'คลังพัสดุสำนักงาน', 'stockengname' => 'stock office'],
            ['stockname' => 'คลังพัสดุทางการแพทย์ของสาขาวิชาการบริบาลผู้ป่วยนอก', 'stockengname' => 'Medical supplies1 '],
            ['stockname' => 'คลังพัสดุทางการแพทย์ของสาขาวิชาความดันโลหิตสูง', 'stockengname' => 'Medical supplies2'],
           
        );

        foreach($stocks as $stock){
            stock::create($stock);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
