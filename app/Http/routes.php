<?php

use App\User;

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

Route::get('users/create', function () {
    $user = User::create([
        'name' => 'David García', 'email' => 'ccristhiangarcia@gmail.com', 
        'password' => bcrypt('secret'), 'gender' => 'f', 
        'biography' => 'Professor'
    ]);
});

Route::get('users', function () {
    $users = User::all();

    echo "<ul>";
    foreach ($users as $user) {
        echo "<li>" . $user->name . "</li>";
    }
    echo "</ul>";
});

Route::get('users/update', function () {
    $user = User::findOrFail(2);
    $user->gender = 'm';
    $user->biography = 'Estudiante';
    $user->save();
});

Route::get('users/delete', function () {
    $user = User::findOrFail(1);
    $user->delete();
});
