<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_details', function(Blueprint $table)
		{
			$table->foreign('department_id', 'user_details_ibfk_1')->references('id')->on('departments')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('designation_id', 'user_details_ibfk_2')->references('id')->on('designations')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('location_id', 'user_details_ibfk_3')->references('id')->on('locations')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('holiday_calendar_id', 'user_details_ibfk_4')->references('id')->on('holiday_calendars')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_details', function(Blueprint $table)
		{
			$table->dropForeign('user_details_ibfk_1');
			$table->dropForeign('user_details_ibfk_2');
			$table->dropForeign('user_details_ibfk_3');
			$table->dropForeign('user_details_ibfk_4');
		});
	}

}
