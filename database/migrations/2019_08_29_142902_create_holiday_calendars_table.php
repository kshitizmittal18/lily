<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHolidayCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holiday_calendars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description', 65535)->nullable();
			$table->boolean('status')->nullable();
			$table->integer('year')->nullable();
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
		Schema::drop('holiday_calendars');
	}

}
