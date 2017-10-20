<?php
use Illuminate\Http\Request;
use App\User;
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
    return view('main.home');
});

Route::get('/about', function () {
    return view('main.about');
});

Route::get('/tracking', function () {
    return view('main.tracking');
});

Route::get('/pricing', function () {
    return view('main.pricing');
});

Route::get('/contact', function () {
    return view('main.contact');
});

Route::get('/login', function () {
    return view('main.login');
});

Route::post('/signIn', 'AdminController@signIn');

Route::post('/user' , 'UserController@user');

Route::post('/track' , 'UserController@track');

Route::post('/register', 'AdminController@signUp');

Route::get('/admin', 'AdminController@index');
 


Route::group(['middleware'=>'auth'], function(){

    Route::get('/admin', 'AdminController@index'); 
    
    Route::get('/admin/edit/{id}', 'AdminController@edit');


});