<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJiraissueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jiraissue', function(Blueprint $table)
		{
			$table->decimal('ID', 18, 0)->primary();
			$table->string('pkey')->nullable();
			$table->decimal('issuenum', 18, 0)->nullable();
			$table->decimal('PROJECT', 18, 0)->nullable();
			$table->string('REPORTER')->nullable()->index('issue_reporter');
			$table->string('ASSIGNEE')->nullable()->index('issue_assignee');
			$table->string('CREATOR')->nullable();
			$table->string('issuetype')->nullable();
			$table->string('SUMMARY')->nullable();
			$table->text('DESCRIPTION')->nullable();
			$table->text('ENVIRONMENT')->nullable();
			$table->string('PRIORITY')->nullable();
			$table->string('RESOLUTION')->nullable();
			$table->string('issuestatus')->nullable();
			$table->dateTime('CREATED')->nullable()->index('issue_created');
			$table->dateTime('UPDATED')->nullable()->index('issue_updated');
			$table->dateTime('DUEDATE')->nullable()->index('issue_duedate');
			$table->dateTime('RESOLUTIONDATE')->nullable()->index('issue_resolutiondate');
			$table->decimal('VOTES', 18, 0)->nullable()->index('issue_votes');
			$table->decimal('WATCHES', 18, 0)->nullable()->index('issue_watches');
			$table->decimal('TIMEORIGINALESTIMATE', 18, 0)->nullable();
			$table->decimal('TIMEESTIMATE', 18, 0)->nullable();
			$table->decimal('TIMESPENT', 18, 0)->nullable();
			$table->decimal('WORKFLOW_ID', 18, 0)->nullable()->index('issue_workflow');
			$table->decimal('SECURITY', 18, 0)->nullable();
			$table->decimal('FIXFOR', 18, 0)->nullable();
			$table->decimal('COMPONENT', 18, 0)->nullable();
			$table->index(['issuenum','PROJECT'], 'issue_proj_num');
			$table->index(['PROJECT','issuestatus'], 'issue_proj_status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jiraissue');
	}

}
