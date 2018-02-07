<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectKeyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_key', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->decimal('PROJECT_ID', 18, 0)->nullable()->index('idx_all_project_ids');
			$table->string('PROJECT_KEY')->nullable()->unique('idx_all_project_keys');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_key');
	}

}
