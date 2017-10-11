<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_group', function (Blueprint $table) {
            $table->increments('id');

            // Relacion Empleado
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')
                  ->references('id')->on('employee')
                  ->onDelete('cascade');

            // Relacion Sede
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')
                  ->references('id')->on('group')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('employee_group');
    }
}
