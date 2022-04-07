<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatematicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matematicas', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('M1');
            $table->string('M2');
            $table->string('M3');
            $table->string('M4');
            $table->string('M5');
            $table->string('M6');
            $table->string('M7');
            $table->string('M8');
            $table->string('M9');
            $table->string('M10');
            $table->string('M11');
            $table->string('M12');
            $table->string('M13');
            $table->string('M14');
            $table->string('M15');
            $table->string('M16');
            $table->string('M17');
            $table->string('M18');
            $table->string('M19');
            $table->string('M20');
            $table->string('M21');
            $table->string('M22');
            $table->string('M23');
            $table->string('M24');
            $table->string('M25');
            $table->string('M26');
            $table->string('M27');
            $table->string('M28');
            $table->string('M29');
            $table->string('M30');
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
        Schema::dropIfExists('matematicas');
    }
}
