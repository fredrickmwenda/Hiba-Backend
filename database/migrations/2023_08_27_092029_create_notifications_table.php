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
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');;
            $table->string('title');
            $table->text('message');
            $table->enum('sender_type', ['company', 'app'])->default('app'); // 'company' or 'app'
            $table->string('user_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->boolean('read')->default(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
