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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', 'Frontend\HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// users
Route::get('/users', 'UsersController@index')->name('profile');
Route::get('/users/create-new', 'UsersController@create_page')->name('create');

// Categories
Route::get('/categories', 'CategoriesController@index')->name('index');
Route::get('/categories/create-new', 'CategoriesController@create_page')->name('create_page');
Route::post('/categories/create-new', 'CategoriesController@save_page')->name('create_page');
Route::get('/categories/update/{categories}', 'CategoriesController@update_page')->name('edit');
Route::post('/categories/update/{categories}', 'CategoriesController@update_save')->name('update');
Route::delete('/categories/delete/{categories}', 'CategoriesController@delete')->name('delete');
// Route::get('/categories/view/{categories}', 'CategoriesController@view_categories')->name('view');
Route::get('/categories/show/{slug}', 'CategoriesController@show')->name('create');

// products
Route::get('/products', 'ProductsController@index')->name('index');
Route::get('/products/create-new', 'ProductsController@create_page')->name('create');
Route::post('/products/create-new', 'ProductsController@save_page')->name('create');
Route::get('/products/update/{product}', 'ProductsController@update_page')->name('edit');
Route::post('/products/update/{product}', 'ProductsController@update_save')->name('edit');
Route::delete('/products/delete/{product}', 'ProductsController@delete')->name('delete');
Route::get('/products/show/{slug}', 'ProductsController@show')->name('create');


// productuser
Route::get('/productuser', 'Frontend\ProductuserController@index')->name('index');
