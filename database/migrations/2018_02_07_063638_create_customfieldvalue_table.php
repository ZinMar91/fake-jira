<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomfieldvalueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customfieldvalue', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->decimal('ISSUE', 18, 0)->nullable();
			$table->decimal('CUSTOMFIELD', 18, 0)->nullable();
			$table->string('PARENTKEY')->nullable();
			$table->string('STRINGVALUE')->nullable();
			$table->decimal('NUMBERVALUE', 18, 6)->nullable();
			$table->text('TEXTVALUE')->nullable();
			$table->dateTime('DATEVALUE')->nullable();
			$table->string('VALUETYPE')->nullable();
			$table->decimal('UPDATED', 18, 0)->nullable();
			$table->index(['ISSUE','CUSTOMFIELD'], 'cfvalue_issue');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customfieldvalue');
	}

}
