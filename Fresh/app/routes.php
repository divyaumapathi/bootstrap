<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('bookstore','BookstoreController@make');
Route::get('bookstore_adminlogin','BookstoreController@login');
Route::get('bookstore_admin','BookstoreController@admin');
Route::get('add_books','BookstoreController@add');
Route::get('delete_books','BookstoreController@delete');
Route::get('update_books','BookstoreController@update_books');
Route::get('recently_added','BookstoreController@recently_added');
Route::get('recently_deleted','BookstoreController@recently_deleted');
Route::get('recently_updated','BookstoreController@recently_updated');
Route::get('add_success','BookstoreController@add_success');
Route::get('modal','BookstoreController@modal');
Route::get('book_details','BookstoreController@book_details');
Route::get('all_books','BookstoreController@all_books');
Route::get('edit_book','BookstoreController@edit_book');
Route::get('hey','BookstoreController@hey');

Route::post('ajaxreq','BookstoreController@del_buk');
Route::post('ajax_edit','BookstoreController@ajax_edit');
Route::post('add','BookstoreController@insert');
Route::post('delete','BookstoreController@remove');
Route::post('search_book','BookstoreController@search_book');
Route::post('reserve','BookstoreController@reserve');
Route::post('update','BookstoreController@update_count');
Route::post('edit','BookstoreController@edit');
Route::get('deletebuk','BookstoreController@deletebuk');
Route::post('update_buk','BookstoreController@update_buk');
