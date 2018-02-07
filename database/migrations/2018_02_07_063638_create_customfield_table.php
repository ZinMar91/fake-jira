<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomfieldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customfield', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->string('cfkey')->nullable();
			$table->string('CUSTOMFIELDTYPEKEY')->nullable();
			$table->string('CUSTOMFIELDSEARCHERKEY')->nullable();
			$table->string('cfname')->nullable();
			$table->text('DESCRIPTION', 16777215)->nullable();
			$table->string('defaultvalue')->nullable();
			$table->decimal('FIELDTYPE', 18, 0)->nullable();
			$table->decimal('PROJECT', 18, 0)->nullable();
			$table->string('ISSUETYPE')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customfield');
	}

}
