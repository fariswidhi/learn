<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_children');
			$table->integer('id_question');
			$table->string('id_answer');
			$table->string('sessid', 30);
			$table->integer('on_going')->nullable();
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
		Schema::drop('users_answers');
	}

}
