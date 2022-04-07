<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturas', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('E31');
            $table->string('E32');
            $table->string('E33');
            $table->string('E34');
            $table->string('E35');
            $table->string('E36');
            $table->string('E37');
            $table->string('E38');
            $table->string('E39');
            $table->string('E40');
            $table->string('E41');
            $table->string('E42');
            $table->string('E43');
            $table->string('E44');
            $table->string('E45');
            $table->string('E46');
            $table->string('E47');
            $table->string('E48');
            $table->string('E49');
            $table->string('E50');
            $table->string('E51');
            $table->string('E52');
            $table->string('E53');
            $table->string('E54');
            $table->string('E55');
            $table->string('E56');
            $table->string('E57');
            $table->string('E58');
            $table->string('E59');
            $table->string('E60');
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
        Schema::dropIfExists('lecturas');
    }
}
