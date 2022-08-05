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

// blog
Route::get('adminlt/blogcreate','\App\Http\Controllers\Blogcontroller@create')->name('blog.blog-form');

Route::post('adminlt/saveblog','\App\Http\Controllers\Blogcontroller@savecreate')->name('blog.blog-save-form');

Route::get('adminlt/blog','\App\Http\Controllers\Blogcontroller@listing')->name('blog.listing-blog');

Route::get('adminlt/{id}/edit','\App\Http\Controllers\Blogcontroller@edit')->name('blog.edit-blog');

Route::post('adminlt/update-edit','\App\Http\Controllers\Blogcontroller@update')->name('blog.update-edit-blog');

Route::get('adminlt/{id}/delete','\App\Http\Controllers\Blogcontroller@delete')->name('blog.delete-blog');

// newslater

Route::get('adminlt/newslater','\App\Http\Controllers\Newslatercontroller@listing')->name('newslater.listing-newslater');

Route::get('adminlt/createnewslater','\App\Http\Controllers\Newslatercontroller@create')->name('newslater.add-newslater');

Route::post('adminlt/savecreatenewslater','\App\Http\Controllers\Newslatercontroller@savecreate')->name('newslater.save-add-newslater');

Route::get('adminlt/{id}/editnewslater','\App\Http\Controllers\Newslatercontroller@edit')->name('newslater.edit-newslater');
 
Route::post('adminlt/update-editnewslater','\App\Http\Controllers\Newslatercontroller@update')->name('newslater.update-edit-newslater');

Route::get('adminlt/{id}/deletenewslater','\App\Http\Controllers\Newslatercontroller@delete')->name('newslater.delete-newslater');

// service

Route::get('adminlt/service','\App\Http\Controllers\Servicecontroller@listing')->name('service.listing-service');

Route::get('adminlt/createservice','\App\Http\Controllers\Servicecontroller@create')->name('service.add-service');

Route::post('adminlt/save-createservice','\App\Http\Controllers\Servicecontroller@savecreate')->name('service.save-add-service');

Route::get('adminlt/{id}/edit-service','\App\Http\Controllers\Servicecontroller@edit')->name('service.edit-service');

Route::post('adminlt/save-edit-service','\App\Http\Controllers\Servicecontroller@update')->name('service.save-edit-service');

Route::get('adminlt/{id}/delete-service','\App\Http\Controllers\Servicecontroller@delete')->name('service.delete-service');

// testimonial

Route::get('adminlt/testimonial','\App\Http\Controllers\Testimonialcontroller@listing')->name('testimonial.listing-testimonial');

Route::get('adminlt/createtestimonial','\App\Http\Controllers\Testimonialcontroller@create')->name('testimonial.add-testimonial');

Route::post('adminlt/savecreatetestimonial','\App\Http\Controllers\Testimonialcontroller@savecreate')->name('testimonial.save-add-testimonial');