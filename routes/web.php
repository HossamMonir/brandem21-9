<?php
// frontend

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderImagesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkDetailsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// auth routes
// Auth::routes(['register' => false]);
Auth::routes();

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('home');

    Route::get('about-us', 'about')->name('about-us');

    Route::get('our-services', 'services')->name('our-services');
    Route::get('our-services-details/{id}', 'serviceDetails')->name('our-services-details');

    Route::get('our-work', 'work')->name('our-work');
    Route::get('our-work-details/{id}', 'workDetails')->name('our-work-details');

    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details/{id}', 'blogDetails')->name('blog-details');

    Route::get('get-in-touch', 'getInTouch')->name('get-in-touch');
    Route::post('get-in-touch', 'sendMail')->name('mail.send');
});

// admin
Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin');
        Route::get('settings', 'settings')->name('admin-settings');
        Route::post('/', 'updateSettings')->name('admin-update');
    });

    // pages
    Route::resource('pages', AdminPagesController::class, [
        'names' => [
            'index' => 'pages-index',
            'edit' => 'pages-edit',
            'update' => 'pages-update',
            'show' => 'pages-show',
        ],
    ]);

    //slider images
    Route::resource('slider-images', SliderImagesController::class, [
        'names' => [
            'index' => 'slider-images-index',
            'create' => 'slider-images-create',
            'store' => 'slider-images-store',
            'edit' => 'slider-images-edit',
            'show' => 'slider-images-show',
            'update' => 'slider-images-update',
            'destroy' => 'slider-images-destroy',
        ],
    ]);
    // home
    Route::resource('homepage', HomePageController::class, [
        'names' => [
            'index' => 'homepage-index',
            'create' => 'homepage-create',
            'store' => 'homepage-store',
            'edit' => 'homepage-edit',
            'show' => 'homepage-show',
            'update' => 'homepage-update',
            'destroy' => 'homepage-destroy',
            'order' => 'order',
        ],
    ]);
    //about
    Route::resource('about', AboutController::class, [
        'names' => [
            'index' => 'about-index',
            'create' => 'about-create',
            'store' => 'about-store',
            'edit' => 'about-edit',
            'show' => 'about-show',
            'update' => 'about-update',
            'destroy' => 'about-destroy',

        ],
    ]);

    //services
    Route::resource('services', ServicesController::class, [
        'names' => [
            'index' => 'services-index',
            'create' => 'services-create',
            'store' => 'services-store',
            'edit' => 'services-edit',
            'show' => 'services-show',
            'update' => 'services-update',
            'destroy' => 'services-destroy',
        ],
    ]);
    // services details
    Route::resource('service/{service_id}/service-details', ServiceDetailsController::class, [
        'names' => [
            'index' => 'service-details-index',
            'create' => 'service-details-create',
            'store' => 'service-details-store',
            'edit' => 'service-details-edit',
            'show' => 'service-details-show',
            'update' => 'service-details-update',
            'destroy' => 'service-details-destroy',
        ],
    ]);

    //work
    Route::resource('work', WorkController::class, [
        'names' => [
            'index' => 'work-index',
            'create' => 'work-create',
            'store' => 'work-store',
            'edit' => 'work-edit',
            'show' => 'work-show',
            'update' => 'work-update',
            'destroy' => 'work-destroy',
        ],
    ]);

    //work details
    Route::resource('work/{work_id}/work-details', WorkDetailsController::class, [
        'names' => [
            'index' => 'work-details-index',
            'create' => 'work-details-create',
            'store' => 'work-details-store',
            'edit' => 'work-details-edit',
            'show' => 'work-details-show',
            'update' => 'work-details-update',
            'destroy' => 'work-details-destroy',
        ],
    ]);

    //blog
    Route::resource('blog', BlogController::class, [
        'names' => [
            'index' => 'blog-index',
            'create' => 'blog-create',
            'store' => 'blog-store',
            'edit' => 'blog-edit',
            'show' => 'blog-show',
            'update' => 'blog-update',
            'destroy' => 'blog-destroy',
        ],
    ]);

    // Client;
    Route::resource('client', ClientController::class, [
        'names' => [
            'index' => 'client-index',
            'create' => 'client-create',
            'store' => 'client-store',
            'edit' => 'client-edit',
            'show' => 'client-show',
            'update' => 'client-update',
            'destroy' => 'client-destroy',
        ],
    ]);

    // Testimonials
    Route::resource('testimonials', TestimonialsController::class, [
        'names' => [
            'index' => 'testimonials-index',
            'create' => 'testimonials-create',
            'store' => 'testimonials-store',
            'edit' => 'testimonials-edit',
            'show' => 'testimonials-show',
            'update' => 'testimonials-update',
            'destroy' => 'testimonials-destroy',
        ],
    ]);
});
