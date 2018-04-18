<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->enum('status',['Activo', 'Inactivo', 'Cerrado']);
            $table->integer('win_id', 10)->nullable();
            $table->timestamps();
        });

        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document',11);
            $table->string('name',100);
            $table->string('lastname',100);
            $table->string('id_depeartament',10);
            $table->string('id_city',10);
            $table->string('phone',11);
            $table->string('email',100);
            $table->integer('draw_id')->unsigned();
            $table->foreign('draw_id')->references('id')->on('draws')->onDelete('cascade');
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
        
        Schema::dropIfExists('participants');
        Schema::dropIfExists('draws');
    }
}
