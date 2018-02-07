<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkflowschemeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workflowscheme', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->string('NAME')->nullable();
			$table->text('DESCRIPTION', 16777215)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('workflowscheme');
	}

}
