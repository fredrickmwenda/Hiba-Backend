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
        Schema::create('company_customers', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
			$table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedBigInteger('customer_id');
			$table->foreign('customer_id')->references('id')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
