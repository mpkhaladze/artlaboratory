<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::POST('/avatars' , function(){

$name = request()->file('avatar')->store('avatars');
dd($name);
return back();

});*/
Route::post('/avatars' , 'UserAvatarController@upload');

Auth::routes();

Route::group(['middleware' => ['auth'],'namespace' => 'Admin','prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::post('/items/create/upload', 'FileUploadController@upload');
    Route::resource('/items', 'ItemsController');

});

Route::get('items/img/{id}/{filename}', function ($id, $filename)
{
	//dd($id);
    $path = storage_path() . '/app/items/img/'. $id . '/' . $filename;


    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});