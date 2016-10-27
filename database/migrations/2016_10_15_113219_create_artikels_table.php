<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artikels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tag');
			$table->string('title');
			$table->string('slug');
			$table->text('content');
			$table->string('created_by');
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
		Schema::drop('artikels');
	}

}
