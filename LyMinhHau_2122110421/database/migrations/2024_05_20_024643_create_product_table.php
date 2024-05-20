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
        Schema::create('lmh-product', function (Blueprint $table) {
            $table->id();                                       
            $table->unsignedInteger('category_id');                        
            $table->unsignedInteger('brand_id'); 
            $table->string('name',1000);     
            $table->string('slug',1000);  
            $table->text('detail');
            $table->text('description',100)->nullable();            
            $table->string('image',1000);   
            $table->double('pricebuy');
            $table->unsignedTinyInteger('status');              
            $table->unsignedInteger('created_by')->nullable();               
            $table->unsignedInteger('updated_by');               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lmh-product');
    }
};
