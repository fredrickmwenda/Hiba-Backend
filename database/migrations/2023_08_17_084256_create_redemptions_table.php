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
		Schema::create('redemptions', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('customer_id');
			$table->integer('reward_id');
			$table->decimal('redeemed_points', 10, 2);
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
		Schema::drop('redemptions');
	}
};
