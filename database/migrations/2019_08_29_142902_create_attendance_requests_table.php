<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendanceRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance_requests', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('user_id')->unsigned()->index('attendance_requests_ibfk_1');
			$table->date('application_date');
			$table->bigInteger('attendance_id')->unsigned()->index('attendance_id');
			$table->integer('new_first_half');
			$table->integer('new_second_half');
			$table->text('reason', 65535);
			$table->enum('request_status', array('Pending','Approved','Rejected'));
			$table->text('comments', 65535)->nullable();
			$table->bigInteger('action_by')->unsigned()->nullable()->index('action_by');
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
		Schema::drop('attendance_requests');
	}

}
