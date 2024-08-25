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
        Schema::table('sambazas', function (Blueprint $table) {
            $table->enum('status', ['released', 'recovered', 'failed', 'pending', 'review'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sambazas', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
