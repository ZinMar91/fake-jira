<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomfieldoptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customfieldoption', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->decimal('CUSTOMFIELD', 18, 0)->nullable()->index('cf_cfoption');
			$table->decimal('CUSTOMFIELDCONFIG', 18, 0)->nullable();
			$table->decimal('PARENTOPTIONID', 18, 0)->nullable();
			$table->decimal('SEQUENCE', 18, 0)->nullable();
			$table->string('customvalue')->nullable();
			$table->string('optiontype', 60)->nullable();
			$table->string('disabled', 60)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customfieldoption');
	}

}
