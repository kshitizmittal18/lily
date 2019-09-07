<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_details', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name')->nullable();
			$table->string('email', 191);
			$table->enum('gender', array('male','female'));
			$table->date('dob')->nullable();
			$table->string('mobile')->nullable();
			$table->date('date_of_joining')->nullable();
			$table->integer('department_id')->unsigned()->nullable()->index('department_id');
			$table->integer('designation_id')->unsigned()->nullable()->index('designation_id');
			$table->integer('location_id')->unsigned()->nullable()->index('location_id');
			$table->integer('holiday_calendar_id')->unsigned()->nullable()->index('holiday_calendar_id');
			$table->bigInteger('supervisor')->unsigned()->nullable();
			$table->string('employment_status')->nullable();
			$table->boolean('status')->default(1);
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
		Schema::drop('user_details');
	}

}
