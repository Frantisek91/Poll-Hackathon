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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/polls", "PollController@index");
Route::get("/poll/create", "PollController@create");
Route::post("/poll", "PollController@store")->middleware("auth");
Route::get("/poll/{id}/edit", "PollController@edit");
Route::put("/poll/{id}/edit", "PollController@update");
Route::get("/user", "UserController@index");
Route::post("/vote", "VoteController@store");
