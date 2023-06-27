<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("marca");
            $table->string("modelo");
            $table->string("color");
            $table->string("matricula");
            $table->integer("puertas");
            $table->unsignedBigInteger("vendedor_id");
            $table->foreign("vendedor_id")->references("id")->on("vendedores");
            $table->softDeletes();

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
