<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJiraworkflowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jiraworkflows', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->string('workflowname')->nullable();
			$table->string('creatorname')->nullable();
			$table->text('DESCRIPTOR')->nullable();
			$table->string('ISLOCKED', 60)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jiraworkflows');
	}

}
