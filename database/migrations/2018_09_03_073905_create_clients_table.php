<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('clients', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('mobile_number');
			$table->string('primary_address');
			$table->string('temp_address');
			$table->string('phone_number');
			$table->integer('wallet_id');
			//	$table->foreign('wallet_id')->references('id')->on('wallets');
			$table->float('total_amount');
			$table->float('bonus_amount');
			$table->enum('user_type', ['Admin', 'Normal', 'Travel Agent', 'Travel Agent Admin']);
			$table->boolean('active');
			$table->integer('travel_company_id');
			//$table->foreign('travel_company_id')->references('id')->on('travel_companies');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('clients');
	}
}
