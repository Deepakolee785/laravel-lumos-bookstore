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

// frontedn routes

Route::get('/', 'Frontend\IndexPageController@index')->name('index');
Route::get('/shop', 'Frontend\ShopController@index')->name('shop');
Route::get('/about-us', 'Frontend\AboutController@index')->name('about');
Route::get('/contact-us', 'Frontend\ContactController@index')->name('contact');
Route::get('/check-out', 'Frontend\CheckOutController@index')->name('checkout');
Route::get('/filtered-books', 'Frontend\FilteredBooksController@index');
// Route::get('/filter', 'Frontend\FilterPageController@index')->name('filter-books');

Route::get('/getGroups/{college_id}','Frontend\IndexPageController@getGroups');

// Route::post('/filtered-books','Frontend\BookPageController@index')->name('filtered-books');
Route::post('/filtered-books','Frontend\FilteredBooksController@index')->name('filtered-books');


//cart
// Route::get('/cart','Frontend\CartController@index');
Route::post('/checkout','Frontend\CartController@addCart')->name('cart');
Route::get('/clear-cart','Frontend\CartController@clearCart')->name('clear-cart');
Route::get('/addToCart/{id}', 'Frontend\CartController@addBookToCart');
Route::get('/deleteFromCart/{rowId}', 'Frontend\CartController@deleteBookFromCart');
Route::get('/cart/update/', 'Frontend\CartController@updateQty');

// search book
Route::get('/search', 'Frontend\SearchBookController@index')->name('search');






// backend routes

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');

Route::resource('colleges', 'CollegeController');

Route::resource('groups', 'GroupController');

Route::resource('books', 'BookController');

Route::resource('customers', 'CustomerController');

Route::resource('orders', 'OrderController');

Route::resource('orderBooks', 'Order_BookController');

Route::resource('collegeGroupBooks', 'CollegeGroupBookController');

// 
Route::get('/home/getGroups/{id}','FilterGroupController@getGroup');

// admin search

Route::get('/admin/search/groups', 'AdminSearchController@searchByCollege')->name('admin-search-groups');
Route::get('/admin/search/books', 'AdminSearchController@searchBook')->name('admin-search-book');
Route::get('/admin/search/cgb', 'AdminSearchController@searchBookGroupCollege')->name('admin-search-cgb');




