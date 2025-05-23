<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('goal_amount')->default(0);       
            $table->integer('collected_amount')->default(0);    
            $table->timestamps();
        });        
    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};
