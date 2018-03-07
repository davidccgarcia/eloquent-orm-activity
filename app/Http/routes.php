<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    $user = App\User::create([
        'name' => 'David García', 'email' => 'ccristhiangarcia@gmail.com', 
        'password' => bcrypt('secret'), 'gender' => 'f', 
        'biography' => 'Professor'
    ]);
});

Route::get('users/update', function () {
    $user = App\User::findOrFail(1);
    $user->gender = 'm';
    $user->biography = 'Estudiante';
    $user->save();
});
