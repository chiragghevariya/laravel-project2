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

Route::get('adminlt','\App\Http\Controllers\Adminltcontroller@index')->name('adminlt');

Route::get('adminlt/blogcreate','\App\Http\Controllers\Blogcontroller@create')->name('blog.blog-form');

Route::post('adminlt/saveblog','\App\Http\Controllers\Blogcontroller@savecreate')->name('blog.blog-save-form');

Route::get('adminlt/blog','\App\Http\Controllers\Blogcontroller@listing')->name('blog.listing-blog');

Route::get('adminlt/blog','\App\Http\Controllers\Blogcontroller@listing')->name('blog.listing-blog');

Route::get('adminlt/{id}/edit','\App\Http\Controllers\Blogcontroller@edit')->name('blog.edit-blog');

