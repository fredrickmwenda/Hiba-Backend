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
		Schema::create('sambazas', function(Blueprint $table) {
            $table->bigIncrements('id');

			$table->unsignedBigInteger('sender_id');
			$table->unsignedBigInteger('recipient_id');
			$table->unsignedBigInteger('program_id');
			$table->decimal('transferred_points', 10, 2);
			$table->timestamps();
	
			$table->foreign('sender_id')->references('id')->on('users');
			$table->foreign('recipient_id')->references('id')->on('users');
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
		Schema::drop('sambazas');
	}
};
