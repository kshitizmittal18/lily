<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAttendanceRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attendance_requests', function(Blueprint $table)
		{
			$table->foreign('user_id', 'attendance_requests_ibfk_1')->references('id')->on('user_details')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('attendance_id', 'attendance_requests_ibfk_2')->references('id')->on('attendance')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('action_by', 'attendance_requests_ibfk_3')->references('id')->on('user_details')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attendance_requests', function(Blueprint $table)
		{
			$table->dropForeign('attendance_requests_ibfk_1');
			$table->dropForeign('attendance_requests_ibfk_2');
			$table->dropForeign('attendance_requests_ibfk_3');
		});
	}

}
