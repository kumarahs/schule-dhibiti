<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Roles', function (Blueprint $table) {
            $table->increments('RoleId');
            $table->integer('TypeRole');
            $table->integer('PersonneId')->unsigned();
            $table->integer('EcoleId')->nullable()->unsigned();
            $table->integer('SectionId')->nullable()->unsigned();
            $table->integer('CycleId')->nullable()->unsigned();

            $table->foreign('PersonneId')
                  ->references('PersonneId')
                  ->on('Personnes')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            
            $table->foreign('EcoleId')
                  ->references('EcoleId')
                  ->on('Ecoles')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('SectionId')
                  ->references('SectionId')
                  ->on('Sections')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            
            $table->foreign('CycleId')
                  ->references('CycleId')
                  ->on('Cycles')
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
        Schema::table('Roles', function(Blueprint $table) {
            $table->dropForeign('roles_personneid_foreign');
        });
        Schema::table('Roles', function(Blueprint $table) {
            $table->dropForeign('roles_ecoleid_foreign');
        });
        Schema::table('Roles', function(Blueprint $table) {
            $table->dropForeign('roles_sectionid_foreign');
        });
        Schema::table('Roles', function(Blueprint $table) {
            $table->dropForeign('roles_cycleid_foreign');
        });
        Schema::dropIfExists('Roles');
    }
}
