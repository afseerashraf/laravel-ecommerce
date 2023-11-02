<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catogories', function (Blueprint $table) {
            $table->id();
            $table->String('name',100);
            $table->timestamps();
        });
    


    
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->double('price',15,2);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('catogories');
            $table->string('image')->nullable();
            $table->boolean('status')->comment('1:Active,2:Inactive')->default(1);
            $table->boolean('is_favourite')->comment('1:Yes,0:No')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('products');
        Schema::dropIfExists('catogories');

    }
};
