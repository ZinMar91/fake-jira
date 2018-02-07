<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectcategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projectcategory', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->string('cname')->nullable()->index('idx_project_category_name');
			$table->text('description', 16777215)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projectcategory');
	}

}
