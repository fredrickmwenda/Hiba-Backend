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
		Schema::create('authentication_mechanisms', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('customer_id');
			$table->enum('authentication_type', ['Manual', 'TouchID'])->default('Manual');
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
		Schema::drop('authentication_mechanisms');
	}
};
