<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIssuestatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issuestatus', function(Blueprint $table)
		{
			$table->string('ID', 60)->primary();
			$table->decimal('SEQUENCE', 18, 0)->nullable();
			$table->string('pname', 60)->nullable();
			$table->text('DESCRIPTION', 16777215)->nullable();
			$table->string('ICONURL')->nullable();
			$table->decimal('STATUSCATEGORY', 18, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issuestatus');
	}

}
