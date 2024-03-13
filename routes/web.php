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
 Route::group(['middleware' => ['auth']], function () {
    Route::resource('movies','MovieController');
    Route::resource('seats','SeatController');
    Route::resource('halls','HallController');
    Route::resource('showings','ShowingController');
    Route::resource('timeslots','TimeslotController');
    Route::resource('customers','CustomerController');
    Route::resource('upcommings','UpcommingController');
    Route::resource('bookings','BookingController');
 });



Route::get('/','FrontendController@index')->name('index');
Route::get('customer/{id}','FrontendController@customer')->name('customer');
Route::get('seat/{id}','FrontendController@seat')->name('seat');
Route::get('showdetail','FrontendController@showdetail')->name('showdetail');
Route::get('upshowdetail','FrontendController@upshowdetail')->name('upshowdetail');
Route::get('receipt','FrontendController@receipt')->name('receipt');
Route::get('showing_timeslot','FrontendController@showing_timeslot')->name('showing_timeslot');
Route::get('about','FrontendController@about')->name('about');
Route::get('contact','FrontendController@contact')->name('contact');

Route::get('trailer','FrontendController@trailer')->name('trailer');







// Route::get('gethome', function () {
//    echo"I am get Home"
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


