<?php

use Illuminate\Support\Facades\Route;

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


//by B-kh
    Route::get('/hello', function () {
        // $name = 'Bassel';
        // $age = 25;
        $name = request('name');
        $age = request('age');

        // method 1 to Pass the variables
            // return view('hello', [
            //     'name' => $name,
            //     'age' => $age
            // ]);
        // method 2 to Pass the variables
        return view('hello', compact('name', 'age'));
    });
//by B-kh
    Route::get('/phpinfo', 'phpinfo@getinfo')->middleware('auth');
//by B-kh
    Route::get('/hello1', 'PeopleController@welcome');

//by B-kh
    Route::get('/product', 'ProductController@view');

///////////////////////////Auth///////////////////
/* The Auth::routes() method includes the routes for login, registration,
 logout, and password reset. This method along with the home route was added 
 when added the auth scaffolding in the previous section. */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

