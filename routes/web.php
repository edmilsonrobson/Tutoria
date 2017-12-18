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

use App\Http\Controllers\SkillController;

Route::get('/', function () {
    Auth::loginUsingId(1);
    return view('main');
});

/**
 * Skills
 */

Route::get('/skills', 'SkillController@index');
Route::post('/skills', 'SkillController@store');
Route::post('/skills/update/{skill}', 'SkillController@update');
Route::delete('/skills/remove/{skill}', 'SkillController@remove');

/**
 * Projects
 */

Route::get('/projects', 'ProjectController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

