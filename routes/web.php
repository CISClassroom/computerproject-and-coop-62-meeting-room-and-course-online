<?php

//  use Spatie\Permission\Models\Role;
//  use Spatie\Permission\Models\Permission;



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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', function () {
    return view('test.index-user');
});


Auth::routes();
Route::get('/home', 'PostController@index')->name('home');
// users
Route::resource('users', 'UserController');
// roles
Route::resource('roles', 'RoleController');
//permissions
Route::resource('permissions', 'PermissionController');
// Add Posts
Route::resource('posts', 'PostController');


// Add Events
Route::get('events', 'EventController@index')->name('events.index');
Route::post('events', 'EventController@addEvent')->name('events.add');
//Route::get('events1', 'EventController@index1')->name('events.index1');
Route::get('events', 'EventController@show')->name('events.show');
//Route::get('events/{id}/edit', 'EventController@edit')->name('events.edit');
Route::get('events/{id}/edit', 'EventController@edit')->name('events.edit');
Route::post('events/{id}/update', 'EventController@update')->name('events.update');
Route::delete('events/{id}', 'EventController@destroy')->name('events.destroy');
Route::get('searchs', 'EventController@home');
Route::get('searchs', 'EventController@getsearch');


// Add Dropdown
//Route::get('/dynamic_dependent', 'DropdownController@index');
//Route::get('dynamic_dependent/fetch', 'DropdownController@fetch')->name('dynamicdependent.fetch');
//Route::get('/getdistrict/{id}','DropdownController@district')->name('getdistrict');


//  Add Course
Route::resource('crud','CrudsController');  
//Route::get("addmore","CrudsController@indexAdd");
//Route::post("addmore","CrudsController@addMorePost");


// Add Rooms
Route::resource('rooms','RoomController');


//Course
Route::get('courses', 'CourseController@index')->name('courses.index');
Route::post('courses', 'CourseController@store')->name('courses.add');
Route::get('courses', 'CourseController@show')->name('courses.show');
Route::get('courses/{id}/edit', 'CourseController@edit')->name('courses.edit');
Route::post('courses/{id}/update', 'CourseController@update')->name('courses.update');
Route::delete('courses/{id}', 'CourseController@destroy')->name('courses.destroy');



    //Booking Course
//Route::get('bookingRoom', 'AddcourseController@index')->name('bookingRoom.index');
//Route::post('bookingRoom/add', 'AddcourseController@addEvent')->name('bookingRoom.add');
Route::get('bookingRoom/add', 'AddcourseController@create')->name('bookingRoom.create');
Route::post('bookingRoom/save', 'AddcourseController@store')->name('bookingRoom.save');
Route::get('bookingRoom', 'AddcourseController@show')->name('bookingRoom.booking');

//Route::get('bookingRoom/{id}/edit', 'AddcourseController@edit')->name('bookingRoom.edit');
//Route::post('bookingRoom/{id}/update', 'AddcourseController@update')->name('bookingRoom.update');
Route::post('bookingRoom/delete', 'AddcourseController@destroy')->name('bookingRoom.destroy');
//Route::resource('bookingRoom','AddcourseController');



//AutocompleteController
Route::get('/autocomplete', 'AutocompleteController@index');
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');

