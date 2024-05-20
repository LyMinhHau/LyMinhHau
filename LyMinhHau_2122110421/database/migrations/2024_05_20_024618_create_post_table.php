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
        Schema::create('lmh-post', function (Blueprint $table) {
            $table->id();                                       
            $table->unsignedInteger('topic_id');                        
            $table->string('title',1000);    
            $table->string('slug',1000);  
            $table->text('detail');
            $table->text('description',1000)->nullable();            
            $table->string('image')->nullable();   
            $table->string('type');
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
        Schema::dropIfExists('lmh-post');
    }
};
