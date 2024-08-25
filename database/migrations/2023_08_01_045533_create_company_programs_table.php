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
		Schema::create('company_programs', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('description');
			$table->integer('company_id');
			$table->string('entry_points');
			$table->string('usage');
			$table->string('usage_points');
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
		Schema::drop('company_programs');
	}
};
