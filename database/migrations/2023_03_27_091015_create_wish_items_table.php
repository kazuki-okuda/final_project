<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wish_items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('price');    
            $table->string('info', 200);
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです
            //'user_id' は 'userテーブル' の 'id' を参照する外部キーです
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wish_items');
    }
};
