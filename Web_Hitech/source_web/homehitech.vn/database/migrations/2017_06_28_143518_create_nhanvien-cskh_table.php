<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienCskhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cskh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone',20);
            $table->string('email',200);
            $table->string('skype',200);
            $table->string('facebook',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cskh');
    }
}
