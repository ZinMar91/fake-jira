<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIssuetypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issuetype', function(Blueprint $table)
		{
			$table->string('ID', 60)->primary();
			$table->decimal('SEQUENCE', 18, 0)->nullable();
			$table->string('pname', 60)->nullable();
			$table->string('pstyle', 60)->nullable();
			$table->text('DESCRIPTION', 16777215)->nullable();
			$table->string('ICONURL')->nullable();
			$table->decimal('AVATAR', 18, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issuetype');
	}

}
