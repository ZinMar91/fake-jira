<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->string('pname')->nullable();
			$table->string('URL')->nullable();
			$table->string('LEAD')->nullable();
			$table->text('DESCRIPTION', 16777215)->nullable();
			$table->string('pkey')->nullable()->unique('idx_project_key');
			$table->decimal('pcounter', 18, 0)->nullable();
			$table->decimal('ASSIGNEETYPE', 18, 0)->nullable();
			$table->decimal('AVATAR', 18, 0)->nullable();
			$table->string('ORIGINALKEY')->nullable();
			$table->string('PROJECTTYPE')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project');
	}

}
