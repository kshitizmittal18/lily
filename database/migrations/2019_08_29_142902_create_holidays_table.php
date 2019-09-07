<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHolidaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holidays', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('holiday_name');
			$table->date('holiday_date');
			$table->enum('holiday_type', array('Full Day','Half Day'))->nullable();
			$table->text('holiday_description', 65535)->nullable();
			$table->boolean('holiday_status');
			$table->integer('holiday_calendar_id')->unsigned()->index('holiday_calendar_id');
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
		Schema::drop('holidays');
	}

}
