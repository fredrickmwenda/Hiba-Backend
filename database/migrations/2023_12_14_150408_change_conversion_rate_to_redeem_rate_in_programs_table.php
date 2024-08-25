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
        Schema::table('company_programs', function (Blueprint $table) {
            $table->renameColumn('conversion_rate', 'redemption_rate');
            // $table->decimal('redemption_rate', 8, 2);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_programs', function (Blueprint $table) {
            $table->renameColumn('redemption_rate', 'conversion_rate');
        });
    }
};
