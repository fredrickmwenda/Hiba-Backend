<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opted_in_programs', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('customer_id');
            $table->integer('program_id');
            $table->integer('company_id');
            $table->decimal('earned_points', 10, 2); 

            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('opted_in_programs');
	}
};
