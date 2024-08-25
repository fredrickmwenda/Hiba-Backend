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
		Schema::create('conversion_rates', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('program_id');
			// the least points to get reward a program
			$table->decimal('points_threshold', 10, 2);
			//let it be 0.01 for every 100 kes = 1 points for now
			$table->decimal('conversion_rate', 10, 2);

            $table->timestamps();
			$table->foreign('program_id')->references('id')->on('company_programs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conversion_rates');
	}
};
