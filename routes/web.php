<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['middleware' => ['prevent-back-history']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::group(['prefix' => 'index'], function() {
        Route::get('lily', 'HomeController@newDesign')->name('newDesign');
    });
    
    Route::group(['prefix' => 'home'], function() {
        Route::get('/', 'HomeController@index')->name('home.index');
        Route::get('profile', 'HomeController@profile')->name('home.profile');
    });

    Route::group(['prefix' => 'team'], function() {
        Route::get('/', 'TeamController@index')->name('team.index');
    }); 

    Route::group(['prefix' => 'report'], function() {
        Route::get('/', 'ReportController@index')->name('report.index');
    });

    Route::group(['prefix' => 'settings'], function() {
        Route::get('/', 'SettingsController@index')->name('settings.index');
    });

    Route::group(['prefix' => 'time-sheet'], function() {
        Route::get('/', 'HomeController@myTimesheet')->name('my_lily.timesheet');
    });

    Route::prefix('admin')->group(function(){
        Route::get('/', 'HomeController@admin')->name('admin.index');
        Route::prefix('designation')->group(function () {
            Route::get('/', 'DesignationController@index')->name('designation.index');
            Route::get('create', 'DesignationController@create')->name('designation.create');
            Route::post('store', 'DesignationController@store')->name('designation.store');
            Route::get('edit/{id}', 'DesignationController@edit')->name('designation.edit');
            Route::post('update/{id}', 'DesignationController@update')->name('designation.update');
        });
        Route::prefix('department')->group(function () {
            Route::get('/', 'DepartmentController@department')->name('department.index');
            Route::get('create', 'DepartmentController@create')->name('department.create');
            Route::post('store', 'DepartmentController@store')->name('department.store');
            Route::get('edit/{id}', 'DepartmentController@edit')->name('department.edit');
            Route::post('update/{id}', 'DepartmentController@update')->name('department.update');
        });
        Route::prefix('location')->group(function () {
            Route::get('/', 'LocationController@index')->name('location.index');
            Route::get('create', 'LocationController@create')->name('location.create');
            Route::post('store', 'LocationController@store')->name('location.store');
            Route::get('edit/{id}', 'LocationController@edit')->name('location.edit');
            Route::post('update/{id}', 'LocationController@update')->name('location.update');
        });
        Route::prefix('holiday_calendar')->group(function () {
            Route::get('/', 'HolidayCalendarController@index')->name('holiday_calendar.index');
            Route::get('create', 'HolidayCalendarController@create')->name('holiday_calendar.create');
            Route::post('store', 'HolidayCalendarController@store')->name('holiday_calendar.store');
            Route::get('edit/{id}', 'HolidayCalendarController@edit')->name('holiday_calendar.edit');
            Route::post('update/{id}', 'HolidayCalendarController@update')->name('holiday_calendar.update');
            Route::group(['prefix' => 'holiday'], function() {
                Route::get('create/{id}','HolidayController@create')->name('holiday_calendar.holiday.create');
                Route::post('store/{id}', 'HolidayController@store')->name('holiday_calendar.holiday.store');
            });
        });
        Route::prefix('user')->group(function () {
            Route::get('/', 'UserController@index')->name('user.index');
            Route::get('create', 'UserController@create')->name('user.create');
            Route::post('store', 'UserController@store')->name('user.store');
            Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
            Route::post('update/{id}', 'UserController@update')->name('user.update');
        });
        Route::prefix('shift')->group(function () {
            Route::get('/', 'ShiftController@index')->name('shift.index');
            Route::get('create', 'ShiftController@create')->name('shift.create');
            Route::post('store', 'ShiftController@store')->name('shift.store');
            Route::get('edit/{id}', 'ShiftController@edit')->name('shift.edit');
            Route::post('update/{id}', 'ShiftController@update')->name('shift.update');
        });
    });

    Route::get('/clear-cache', function () {
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('route:clear');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:cache');
        $exitCode = Artisan::call('clear-compiled');
        return 'DONE';
    });
    
});


