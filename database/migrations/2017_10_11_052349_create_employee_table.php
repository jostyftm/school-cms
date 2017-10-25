<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email', 60)->unique();
            $table->string('password', 60);
            $table->string('avatar', 60)->nullable();

            // Relacion identificación
            $table->integer('identification_id')->unsigned();
            $table->foreign('identification_id')
                  ->references('id')->on('identification')
                  ->onDelete('cascade');

            // Relacion Direccion
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')
                  ->references('id')->on('address')
                  ->onDelete('cascade');

            // Relacion Rol
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')
                  ->references('id')->on('role')
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
        Schema::dropIfExists('employee');
    }
}
