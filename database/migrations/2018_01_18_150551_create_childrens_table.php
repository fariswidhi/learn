<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChildrensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('childrens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('username', 50);
			$table->string('password', 100);
			$table->integer('id_user');
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
		Schema::drop('childrens');
	}

}
