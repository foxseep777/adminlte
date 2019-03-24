<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersCompTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_comp', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('user_name', 256)->nullable();
			$table->string('id_company', 256)->nullable();
			$table->string('email', 256)->nullable();
			$table->string('created_at', 20)->nullable();
			$table->string('updated_at', 20)->nullable();
			$table->string('deleted_at', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_comp');
	}

}
