<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title');
            $table->mediumText('discrebtion');
            $table->integer('price')->nullable();
            $table->integer('7raj_price');
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->integer('is_new')->nullable();
            $table->integer('note_why')->nullable();
            $table->string('phone');
            $table->string('stute')->default('waiting');
            $table->string('wow');
            // yes is " wow "
            $table->string('type');
            // منتج عادي  0  | بيت سكني 1 | محلات للإيجار | أرض للبيع 3  
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
        Schema::dropIfExists('ads');
    }
}
