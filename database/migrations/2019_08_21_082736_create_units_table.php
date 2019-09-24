<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\unit;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('unitid')->index();
            $table->string('unitname');
            $table->string('unitengname')->nullable();
            $table->string('shortname')->nullable();
            $table->integer('status')->default(1);
            $table->integer('unittype');
            $table->timestamps();
        });

            $units = array(
                ['unitid' => '99', 'unitname' => 'สำนักงานภาควิชาอายุรศาสตร์','unittype'=>'1'],
                ['unitid' => '27', 'unitname' => 'หน่วยงบประมาณและพัสดุ','unittype'=>'1'],
                ['unitid' => '33', 'unitname' => 'หน่วยเวชสารสนเทศและบริหารข้อมูล','unittype'=>'1'],
                ['unitid' => '1', 'unitname' => 'สาขาวิชาการบริบาลผู้ป่วยนอก','unittype'=>'2'],
                ['unitid' => '2', 'unitname' => 'สาขาวิชาความดันโลหิตสูง','unittype'=>'2'],
            );

            foreach($units as $unit){
                unit::create($unit);
            }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
