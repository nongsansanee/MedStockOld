<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\unit_count;
class CreateUnitCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_counts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('countname')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        $units = array(
            ['countname' => 'ชุด'],
            ['countname' => 'ชิ้น'],
            ['countname' => 'ขวด'],
            ['countname' => 'แพ็ค'],
            ['countname' => 'กล่อง'],
            ['countname' => 'ม้วน'],
            ['countname' => 'ถุง'],
        );

        foreach($units as $unit){
            unit_count::create($unit);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_counts');
    }
}
