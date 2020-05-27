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

Route::resource('/', 'HomeController');
Route::resource('/profile', 'ProfileController')
    ->middleware(['auth']);
Route::resource('/articles', 'ArticleController')
    ->middleware(['auth']);

// untuk pisahin struktur admin
// Route::prefix('admin')
//     ->namespace('Admin')
//     ->middleware(['auth', 'admin'])
//     ->group(function(){
//         Route::get('/', 'DashboardController@index')
//             ->name('dashboard');

//         Route::resource('/users', 'UserController');
//         Route::resource('/articles', 'ArticleController');
//         Route::resource('/comments', 'CommentController');
// });


Route::get('/admin', 'Admin\DashboardController@index')
    ->name('dashboard')->middleware(['auth', 'admin']);

Route::resource('/admin/users', 'Admin\UserController')->middleware(['auth', 'admin']);
// Route::resource('/admin/articles', 'Admin\ArticleController')->middleware(['auth', 'admin']);
Route::resource('/admin/comments', 'Admin\CommentController')->middleware(['auth', 'admin']);

Auth::routes(['verify' => true]);
