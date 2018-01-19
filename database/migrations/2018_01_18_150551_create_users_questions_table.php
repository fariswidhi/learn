<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sessid');
			$table->integer('id_module');
			$table->integer('id_question');
			$table->integer('id_answer')->nullable();
			$table->integer('id_user');
			$table->integer('point')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_questions');
	}

}
