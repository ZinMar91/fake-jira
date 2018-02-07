<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('label', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->decimal('FIELDID', 18, 0)->nullable();
			$table->decimal('ISSUE', 18, 0)->nullable()->index('label_issue');
			$table->string('LABEL')->nullable()->index('label_label');
			$table->index(['ISSUE','FIELDID'], 'label_fieldissue');
			$table->index(['ISSUE','FIELDID','LABEL'], 'label_fieldissuelabel');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('label');
	}

}
