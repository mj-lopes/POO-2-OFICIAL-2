<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('question');
            $table->string('coef_a');
            $table->string('coef_b');
            $table->string('coef_c');
            $table->string('delta');
            $table->string('x1');
            $table->string('x2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functions');
    }
}
