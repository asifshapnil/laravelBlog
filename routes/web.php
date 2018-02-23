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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/signup', 'AuthController@getSignup');
Route::post('/signup', 'AuthController@postSignup');
Route::get('/signin', 'AuthController@getSignin');
Route::post('/signin', 'AuthController@postSignin');
Route::get('/logout', 'AuthController@getLogout');

Route::get('/search', 'SearchController@searchPeople');
Route::get('/profile/{username}', 'ProfileController@getProfile');
Route::get('/editProfile/{username}', 'ProfileController@editProfile');
Route::post('/editProfile/{username}', 'ProfileController@update');

Route::get('/addpost/{username}', 'PostsController@addPosts');
Route::post('/addpost/{username}', 'PostsController@storePosts');
Route::get('/posts/{userid}', 'PostsController@posts');
Route::get('/posts/{id}/edit', 'PostsController@editPost');
Route::post('/posts/{id}/edit', 'PostsController@updatePost');
Route::get('/posts/{id}/delete', 'PostsController@destroyPost');

Route::get('/posts/{id}/show', 'PostsController@showPost');
Route::post('/posts/{id}/show', 'CommentController@storeComment');

Route::get('/catagory/{id}', 'CatagoryController@showPosts');

Route::get('/panel/{id}', 'HomeController@panels');

Route::get('/allusers', 'UserController@alluser');
Route::get('/seecatagories', 'CatagoryController@seacatagories');
Route::get('/edit/catagory/{id}', 'CatagoryController@editCatagory');
Route::post('/edit/catagory/{id}', 'CatagoryController@updateCatagories');

Route::get('/addcatagory', 'CatagoryController@addCatagory');
Route::post('/addcatagory', 'CatagoryController@storeCatagories');
Route::get('/delete/catagory/{id}', 'CatagoryController@deleteCatagory');
