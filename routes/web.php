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

Route::resource('clients', 'ClientController');

Route::get('/', function () {
	return view('auth.login');
});

Route::get('/landing', function () {
	return view('home.home');
});

Route::get('home', function () {
	return view('home.home');
});

Route::get('login', function () {
	return view('login.login');
});

Route::get('add-new-advertisement', function () {
	return view('advertisement.add-new-advertisement');
});

Route::get('view-all-advertisement', function () {
	return view('advertisement.view-all-advertisement');
});

Route::get('view-all-booking', function () {
	return view('booking.view-all-booking');
});

Route::get('view-all-hire-bus', function () {
	return view('hire-bus.view-all-hire-bus');
});

Route::get('add-new-travel', function () {
	return view('travel.add-new-travel');
});

Route::get('view-all-travel', function () {
	return view('travel.view-all-travel');
});

Route::get('add-new-travel-passenger', function () {
	return view('travel-passenger.add-new-travel-passenger');
});

Route::get('view-all-travel-passenger', function () {
	return view('travel-passenger.view-all-travel-passenger');
});

Route::get('add-new-travel-route', function () {
	return view('travel-route.add-new-travel-route');
});

Route::get('view-all-travel-route', function () {
	return view('travel-route.view-all-travel-route');
});

Route::get('add-new-travel-schedule', function () {
	return view('travel-schedule.add-new-travel-schedule');
});

Route::get('view-all-travel-schedule', function () {
	return view('travel-schedule.view-all-travel-schedule');
});

//Route::get('add-new-user', function () {
//	return view('user.add-new-user');
//});

Route::get('view-all-user', function () {
	return view('user.view-all-user');
});

Route::get('add-new-vehicle', function () {
	return view('vehicle.add-new-vehicle');
});

Route::get('view-all-vehicle', function () {
	return view('vehicle.view-all-vehicle');
});

Route::get('add-new-vehicle-routine', function () {
	return view('vehicle-routine.add-new-vehicle-routine');
});

Route::get('view-all-vehicle-routine', function () {
	return view('vehicle-routine.view-all-vehicle-routine');
});

Route::get('add-new-vehicle-seat', function () {
	return view('vehicle-seat.add-new-vehicle-seat');
});

Route::get('view-all-vehicle-seat', function () {
	return view('vehicle-seat.view-all-vehicle-seat');
});

Route::get('add-new-vehicle-type', function () {
	return view('vehicle-type.add-new-vehicle-type');
});

Route::get('view-all-vehicle-type', function () {
	return view('vehicle-type.view-all-vehicle-type');
});

Route::get('add-new-wallet', function () {
	return view('wallet.add-new-wallet');
});

Route::get('view-all-wallet', function () {
	return view('wallet.view-all-wallet');
});

Route::get('notification', function () {
	return view('notification.notification');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
