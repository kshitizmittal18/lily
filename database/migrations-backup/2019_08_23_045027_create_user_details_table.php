<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('user_details')) {
            Schema::create('user_details', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('first_name');
                $table->string('last_name')->nullable();
                $table->string('email');
                $table->integer('department_id')->unsigned()->nullable();
                $table->integer('designation_id')->unsigned()->nullable();
                $table->integer('location_id')->unsigned()->nullable();
                $table->integer('holiday_calendar_id')->nullable();
                $table->bigInteger('supervisor')->unsigned()->nullable();
                $table->boolean('status');
                $table->timestamps();

                // $table->foreign('department_id')
                //     ->references('id')
                //     ->on('departments')
                //     ->onUpdate('cascade');

                // $table->foreign('designation_id')
                //     ->references('id')
                //     ->on('designations')
                //     ->onUpdate('cascade');

                // $table->foreign('location_id')
                //     ->references('id')
                //     ->on('locations')
                //     ->onUpdate('cascade');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
