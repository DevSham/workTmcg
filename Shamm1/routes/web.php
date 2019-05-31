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

Route::get('/', function () {
    return view('welcome');
});
//passing variables to a routes.
Route::get('/numbers/{age}/{name}', function ($age, $name) {
    $sex ="female";
    return "her age is".$age."and her name is".$name."\n she is a".$sex;
});
//naming routes
Route::get('adminn/sham/home', array('as'=>'adminn.sham', function (){
    $url = route('adminn.sham');
    return "this is the". $url;
}));
//Route::get('/post/{id}','Product1@index');
//creating routes for all methods in product1 at once.
//Route::resource('post','Product1');
Route::get('/home/{name}/{id}/{sex}', 'Product1@Home');
Route::get('/contact', 'Product1@contact');
Route::get('/home/{name}/{id}/{sex}', 'Product1@Home');
Route::get('/users', 'Shamim@usee');
Route::get('/read', 'Product1@readData');
Route::get('/update', 'Product1@getspecifc');
Route::resource('/posts', 'PostsController');
