<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cycles', function (Blueprint $table) {
            $table->increments('CycleId');
            $table->string('Designation');
            $table->integer('SectionId')->unsigned();
            $table->foreign('SectionId')
                  ->references('SectionId')
                  ->on('Sections')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->boolean('EstSupprime');
            $table->string('CreatedBy');
            $table->string('UpdatedBy');
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
        Schema::table('Cycles', function(Blueprint $table) {
            $table->dropForeign('cycles_sectionid_foreign');
        });
        Schema::dropIfExists('Cycles');
    }
}
