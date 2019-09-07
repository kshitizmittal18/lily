<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->date('date');
			$table->boolean('first_half');
			$table->boolean('second_half');
			$table->timestamps();
			$table->index(['user_id','date'], 'user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attendance');
	}

}
