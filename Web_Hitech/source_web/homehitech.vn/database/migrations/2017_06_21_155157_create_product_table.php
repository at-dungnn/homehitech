<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_sanpham');
            $table->string('ma_sanpham');
            $table->string('cong_suat',50);
            $table->string('kich_thuoc',50);
            $table->string('khoet_lo',50);
            $table->string('gia',20);
            $table->string('img_path');
            $table->text('thong_so');
            $table->string('category_id',50);
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
        Schema::dropIfExists('product');
    }
}
