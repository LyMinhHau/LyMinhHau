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
        Schema::create('lmh-brand', function (Blueprint $table) {
            $table->string('name',1000);                        
            $table->string('slug',1000);            
            $table->unsignedInteger('sort_order')->default(0);  
            $table->text('description')->nullable();            
            $table->string('image',1000)->nullable();           
            $table->unsignedTinyInteger('status');              
            $table->unsignedInteger('created_by');               
            $table->unsignedInteger('updated_by')->nullable();               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lmh-brand');
    }
};
