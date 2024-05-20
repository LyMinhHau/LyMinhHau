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
        Schema::create('lmh-contact', function (Blueprint $table) {
            $table->id();                                       
            $table->unsignedInteger('user_id');            
            $table->string('name');   
            $table->string('email');    
            $table->string('phone'); 
            $table->string('title');          
            $table->mediumText('content'); 
            $table->unsignedInteger('replay_id')->default(0);        
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
        Schema::dropIfExists('lmh-contact');
    }
};
