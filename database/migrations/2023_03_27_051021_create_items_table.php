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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('price');    
            $table->string('place', 50);
            $table->date('date');
            $table->integer('quantity');
            $table->string('info', 200);
            $table->boolean('is_reminded')->nullable();;
            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained(); 
             //'user_id' は 'usersテーブル' の 'id' を参照する外部キーです
            //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
