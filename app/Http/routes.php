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

Route::get('/', 'PagesController@home');
Route::get('/test1', 'PagesController@test1');

Route::get('/btest', 'Test\BTestController@index');

Route::get('login', function () {

    User::truncate();

    $user = User::create([
        'name'     => 'JohnDoe',
        'email'    => 'john@example.com',
        'password' => bcrypt('password'),
        'plan'     => 'yearly',
    ]);

    Auth::login($user);

    return redirect('/');

});

Route::get('test', ['middleware' => 'subscribed:yearly', function () {
    return 'You can only see this page if you are logged in and subscribed to a yearly plan.';
}]);

/*
Route::get('/', function () {
return view('welcome');
});
 */

/*
Route::get('other', function () {
return view('other');
});

Route::get('admin', ['middleware' => 'admin:Brandon', function () {
return 'Hello Brandon';
}]);
 */
