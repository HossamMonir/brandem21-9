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


// frontend

Route::get('/', 'PagesController@index')->name('home');

Route::get('about-us', 'PagesController@about')->name('about-us');

Route::get('our-services', 'PagesController@services')->name('our-services');
Route::get('our-services-details/{id}', 'PagesController@serviceDetails')->name('our-services-details');

Route::get('our-work','PagesController@work')->name('our-work');

Route::get('our-work-details/{id}', 'PagesController@workDetails')->name('our-work-details');

Route::get('blog','PagesController@blog')->name('blog');

Route::get('blog-details/{id}', 'PagesController@blogDetails')->name('blog-details');

Route::get('get-in-touch','PagesController@getInTouch')->name('get-in-touch');

Route::post('get-in-touch','PagesController@sendMail')->name('mail.send');


// auth routes
// Auth::routes(['register' => false]);
Auth::routes();



// admin
Route::get('admin','AdminController@index')->name('admin');
Route::get('admin/settings','AdminController@settings')->name('admin-settings');
Route::post('admin','AdminController@updateSettings')->name('admin-update');

//pages 
Route::resource('/admin/pages', 'AdminPagesController', [
    'names' => [
        'index' => 'pages-index',
        'edit' => 'pages-edit',
        'update' => 'pages-update',
        'show' => 'pages-show',
    ]
]);

//slider images
Route::resource('/admin/slider-images', 'SliderImagesController', [
    'names' => [
        'index' => 'slider-images-index',
        'create' => 'slider-images-create',
        'store' => 'slider-images-store',
        'edit' => 'slider-images-edit',
        'show' => 'slider-images-show',
        'update' => 'slider-images-update',
        'destroy' => 'slider-images-destroy',
    ]
]);
// home
Route::resource('/admin/homepage', 'HomePageController', [
    'names' => [
        'index' => 'homepage-index',
        'create' => 'homepage-create',
        'store' => 'homepage-store',
        'edit' => 'homepage-edit',
        'show' => 'homepage-show',
        'update' => 'homepage-update',
        'destroy' => 'homepage-destroy',
        'order' =>'order',
    ]
]);
//about
Route::resource('/admin/about', 'AboutController', [
    'names' => [
        'index' => 'about-index',
        'create' => 'about-create',
        'store' => 'about-store',
        'edit' => 'about-edit',
        'show' => 'about-show',
        'update' => 'about-update',
        'destroy' => 'about-destroy',
     
    ]
]);

//services
Route::resource('/admin/services', 'ServicesController', [
    'names' => [
        'index' => 'services-index',
        'create' => 'services-create',
        'store' => 'services-store',
        'edit' => 'services-edit',
        'show' => 'services-show',
        'update' => 'services-update',
        'destroy' => 'services-destroy',
    ]
]);
// services details
Route::resource('/admin/service/{service_id}/service-details', 'ServiceDetailsController', [
    'names' => [
        'index' => 'service-details-index',
        'create' => 'service-details-create',
        'store' => 'service-details-store',
        'edit' => 'service-details-edit',
        'show' => 'service-details-show',
        'update' => 'service-details-update',
        'destroy' => 'service-details-destroy',
    ]
]);

//work
Route::resource('/admin/work', 'WorkController', [
    'names' => [
        'index' => 'work-index',
        'create' => 'work-create',
        'store' => 'work-store',
        'edit' => 'work-edit',
        'show' => 'work-show',
        'update' => 'work-update',
        'destroy' => 'work-destroy',
    ]
]);

//work details
Route::resource('/admin/work/{work_id}/work-details', 'WorkDetailsController', [
    'names' => [
        'index' => 'work-details-index',
        'create' => 'work-details-create',
        'store' => 'work-details-store',
        'edit' => 'work-details-edit',
        'show' => 'work-details-show',
        'update' => 'work-details-update',
        'destroy' => 'work-details-destroy',
    ]
]);

//blog
Route::resource('/admin/blog', 'BlogController', [
    'names' => [
        'index' => 'blog-index',
        'create' => 'blog-create',
        'store' => 'blog-store',
        'edit' => 'blog-edit',
        'show' => 'blog-show',
        'update' => 'blog-update',
        'destroy' => 'blog-destroy',
    ]
]);

// Client;
Route::resource('/admin/client', 'ClientController', [
    'names' => [
        'index' => 'client-index',
        'create' => 'client-create',
        'store' => 'client-store',
        'edit' => 'client-edit',
        'show' => 'client-show',
        'update' => 'client-update',
        'destroy' => 'client-destroy',
    ]
]);

// Testimonials
Route::resource('/admin/testimonials', 'TestimonialsController', [
    'names' => [
        'index' => 'testimonials-index',
        'create' => 'testimonials-create',
        'store' => 'testimonials-store',
        'edit' => 'testimonials-edit',
        'show' => 'testimonials-show',
        'update' => 'testimonials-update',
        'destroy' => 'testimonials-destroy',
    ]
]);