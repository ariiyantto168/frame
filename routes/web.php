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
Route::get('/home/all/{name}', 'Frontend\HomeController@show')->name('show');
Route::get('/home/detail/{slug}', 'Frontend\HomeController@detail')->name('detail');

// users
Route::get('/users', 'UsersController@index')->name('profile');
Route::get('/users/create-new', 'UsersController@create_page')->name('create');

// backend


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

// Abouts
Route::get('/abouts', 'AboutsController@index')->name('index');
Route::get('/abouts/create-new', 'AboutsController@create_page')->name('create');
Route::post('/abouts/create-new', 'AboutsController@save_page')->name('create');
Route::get('/abouts/update/{abouts}', 'AboutsController@update_page')->name('edit');
Route::post('/abouts/update/{abouts}', 'AboutsController@update_save')->name('edit');
Route::delete('/abouts/delete/{abouts}', 'AboutsController@delete')->name('delete');


// customer
Route::get('/customers', 'CustomersController@index')->name('index');
Route::get('/customers/create-new', 'CustomersController@create_page')->name('create');
Route::post('/customers/create-new', 'CustomersController@save_page')->name('create');
Route::get('/customers/update/{customer}', 'CustomersController@update_page')->name('edit');

// best products
Route::get('/bestproducts', 'BestproductsController@index')->name('index');
Route::get('/bestproducts/create-new', 'BestproductsController@create_page')->name('create');
Route::post('/bestproducts/create-new', 'BestproductsController@save_page')->name('create');
Route::get('/bestproducts/update/{bestproduct}', 'BestproductsController@update_page')->name('edit');
Route::post('/bestproducts/update/{bestproduct}', 'BestproductsController@update_save')->name('edit');

// Premiums Products
Route::get('/premiums', 'PremiumsController@index')->name('index');
Route::get('/premiums/create-new', 'PremiumsController@create_page')->name('create');
Route::post('/premiums/create-new', 'PremiumsController@save_page')->name('create');
Route::get('/premiums/update/{premium}', 'PremiumsController@update_page')->name('edit');
Route::post('/premiums/update/{premium}', 'PremiumsController@update_save')->name('edit');

// frontend

// Aboutsme
Route::get('/aboutme', 'Frontend\AboutsmeController@index')->name('index');


