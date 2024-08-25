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
		Schema::create('virtual_cards', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('customer_id');
			$table->string('qr-code');
			$table->string('barcode');
			$table->decimal('points', 10, 2); // Adjust precision and scale as needed
			$table->string('card_number'); // New column for card number
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
		Schema::drop('virtual_cards');
	}
};
