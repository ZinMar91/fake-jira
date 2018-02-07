<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovedIssueKeyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moved_issue_key', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->string('OLD_ISSUE_KEY')->nullable()->unique('idx_old_issue_key');
			$table->decimal('ISSUE_ID', 18, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('moved_issue_key');
	}

}
