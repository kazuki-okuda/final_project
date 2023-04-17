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
        Schema::create('expenditures', function (Blueprint $table) {
            $table->id();
            $table->integer('month');
            $table->integer('sum');
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
        Schema::dropIfExists('expenditures');
    }
};
