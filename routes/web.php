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


Route::get('/','\App\Http\Controllers\Homecontroller@index')->name('homepage');

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

Route::get('adminlt/{id}/edit-testimonial','\App\Http\Controllers\Testimonialcontroller@edit')->name('testimonial.edit-testimonial');

Route::post('adminlt/save-edit-testimonial','\App\Http\Controllers\Testimonialcontroller@update')->name('testimonial.save-edit-testimonial');

Route::get('adminlt/{id}delete-testimonial','\App\Http\Controllers\Testimonialcontroller@delete')->name('testimonial.delete-testimonial');

// Footer

Route::get('adminlt/footer','\App\Http\Controllers\Footercontroller@listing')->name('footer.listing-footer');

Route::get('adminlt/createfooter','\App\Http\Controllers\Footercontroller@create')->name('footer.add-footer');

Route::post('adminlt/save-createfooter','\App\Http\Controllers\Footercontroller@savecreate')->name('footer.save-add-footer');

Route::get('adminlt/{id}/editfooter','\App\Http\Controllers\Footercontroller@edit')->name('footer.edit-footer');

Route::post('adminlt/update-footer','\App\Http\Controllers\Footercontroller@update')->name('footer.save-edit-footer');

Route::get('adminlt/{id}/deletefooter','\App\Http\Controllers\Footercontroller@delete')->name('footer.delete-footer');

// social media

Route::get('adminlt/social-media','\App\Http\Controllers\Socialmediacontroller@listing')->name('social.listing-social');

Route::get('adminlt/create-social-media','\App\Http\Controllers\Socialmediacontroller@create')->name('social.add-social');

Route::post('adminlt/save-create-social-media','\App\Http\Controllers\Socialmediacontroller@savecreate')->name('social.save-add-social');

Route::get('adminlt/{id}/edit-social-media','\App\Http\Controllers\Socialmediacontroller@edit')->name('social.edit-social');

Route::post('adminlt/update-social-media','\App\Http\Controllers\Socialmediacontroller@update')->name('social.save-edit-social');

Route::get('adminlt/{id}/delete-social-media','\App\Http\Controllers\Socialmediacontroller@delete')->name('social.delete-social');

// homepage

Route::post('front/save-email','\App\Http\Controllers\Homecontroller@savecreate')->name('frontemail');

// setting

Route::get('adminlt/setting','\App\Http\Controllers\Settingcontroller@create')->name('setting.add');

Route::post('adminlt/setting-update','\App\Http\Controllers\Settingcontroller@update')->name('setting.update-add');








