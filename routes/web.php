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
    return date() > 1 ? "Welcome" : "whoops! Something went wrong!";
});

Route::get("/about", function() {
	return "About Page";
});

Route::get("/feature", function() {
	return "Some features.";
});

Route::get("/api", function() {
	return "Some json api data depends on what is requested.";
});