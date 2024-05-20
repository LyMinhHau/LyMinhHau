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
        Schema::create('lmh-order', function (Blueprint $table) {
            $table->id();            
            $table->unsignedInteger('user_id');                       
            $table->string('delivery_name');  
            $table->string('delivery_gender');
            $table->string('delivery_email');
            $table->string('delivery_phone');
            $table->string('delivery_address',1000);  
            $table->string('note',1000)->nullable();
            $table->string('type',50)->nullable();  
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
        Schema::dropIfExists('lmh-order');
    }
};
