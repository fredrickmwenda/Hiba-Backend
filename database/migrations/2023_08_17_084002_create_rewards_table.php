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
		Schema::create('rewards', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('description');
			$table->string('image')->nullable();
			$table->decimal('points_required', 10, 2);
			$table->unsignedBigInteger('program_id'); // Add this line
	
			$table->foreign('program_id')->references('id')->on('company_programs');
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
		Schema::drop('rewards');
	}
};
