<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sections', function (Blueprint $table) {
            $table->increments('SectionId');
            $table->string('Designation');
            $table->integer('EcoleId')->unsigned();
            $table->foreign('EcoleId')
                  ->references('EcoleId')
                  ->on('Ecoles')
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
        Schema::table('Sections', function(Blueprint $table) {
            $table->dropForeign('sections_ecoleid_foreign');
        });
        Schema::dropIfExists('Sections');
    }
}
