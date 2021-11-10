<?php



use App\Http\Controllers\personController;

Route::get('people', 'PersonController@index');
Route::get('reserves','ReserveController@index');
Route::get('kinds', 'KindController@index');
Route::get('rooms','RoomController@index');