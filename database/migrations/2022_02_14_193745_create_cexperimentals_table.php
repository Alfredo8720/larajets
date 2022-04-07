<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCexperimentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cexperimentals', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('C61');
            $table->string('C62');
            $table->string('C63');
            $table->string('C64');
            $table->string('C65');
            $table->string('C66');
            $table->string('C67');
            $table->string('C68');
            $table->string('C69');
            $table->string('C70');
            $table->string('C71');
            $table->string('C72');
            $table->string('C73');
            $table->string('C74');
            $table->string('C75');
            $table->string('C76');
            $table->string('C77');
            $table->string('C78');
            $table->string('C79');
            $table->string('C80');
            $table->string('C81');
            $table->string('C82');
            $table->string('C83');
            $table->string('C84');
            $table->string('C85');
            $table->string('C86');
            $table->string('C87');
            $table->string('C88');
            $table->string('C89');
            $table->string('C90');
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
        Schema::dropIfExists('cexperimentals');
    }
}
