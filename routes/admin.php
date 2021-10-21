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


Auth::routes(['verify' => true]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['as' => 'admin.', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'layout', 'as' => 'layout.'], function () {
        //Home
        Route::get('/home', [App\Http\Controllers\Admin\LayoutHomeController::class, 'index'])->name('home');
        Route::post('/home', [App\Http\Controllers\Admin\LayoutHomeController::class, 'store'])->name('home.save');

        //About Us
        Route::get('/about-us', [App\Http\Controllers\Admin\LayoutAboutUsController::class, 'index'])->name('about-us');
        Route::post('/about-us', [App\Http\Controllers\Admin\LayoutAboutUsController::class, 'store'])->name('about-us.save');

        Route::get('/skills', [App\Http\Controllers\Admin\SkillController::class, 'index'])->name('skills');
        Route::post('/skills', [App\Http\Controllers\Admin\SkillController::class, 'store'])->name('skills.add');
        Route::get('/skills/{id}', [App\Http\Controllers\Admin\SkillController::class, 'get'])->name('skills.get');
        Route::post('/skills/edit', [App\Http\Controllers\Admin\SkillController::class, 'update'])->name('skills.edit');
        Route::delete('/skills/{id}', [App\Http\Controllers\Admin\SkillController::class, 'destroy'])->name('skills.delete');

        //Works
        Route::get('/work', [App\Http\Controllers\Admin\LayoutWorkController::class, 'index'])->name('work');
        Route::post('/work', [App\Http\Controllers\Admin\LayoutWorkController::class, 'store'])->name('work.save');

        Route::get('/work-category', [App\Http\Controllers\Admin\WorkCategoryController::class, 'index'])->name('work-category');
        Route::post('/work-category', [App\Http\Controllers\Admin\WorkCategoryController::class, 'store'])->name('work-category.add');
        Route::get('/work-category/{id}', [App\Http\Controllers\Admin\WorkCategoryController::class, 'get'])->name('work-category.get');
        Route::post('/work-category/edit', [App\Http\Controllers\Admin\WorkCategoryController::class, 'update'])->name('work-category.edit');
        Route::delete('/work-category/{id}', [App\Http\Controllers\Admin\WorkCategoryController::class, 'destroy'])->name('work-category.delete');

        Route::get('/work-list', [App\Http\Controllers\Admin\WorkController::class, 'index'])->name('work-list');
        Route::post('/work-list', [App\Http\Controllers\Admin\WorkController::class, 'store'])->name('work-list.add');
        Route::get('/work-list/{id}', [App\Http\Controllers\Admin\WorkController::class, 'get'])->name('work-list.get');
        Route::post('/work-list/edit', [App\Http\Controllers\Admin\WorkController::class, 'update'])->name('work-list.edit');
        Route::delete('/work-list/{id}', [App\Http\Controllers\Admin\WorkController::class, 'destroy'])->name('work-list.delete');

        //Services
        Route::get('/service', [App\Http\Controllers\Admin\LayoutServiceController::class, 'index'])->name('service');
        Route::post('/service', [App\Http\Controllers\Admin\LayoutServiceController::class, 'store'])->name('service.save');

        Route::get('/service-list', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('service-list');
        Route::post('/service-list', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('service-list.add');
        Route::get('/service-list/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'get'])->name('service-list.get');
        Route::post('/service-list/edit', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('service-list.edit');
        Route::delete('/service-list/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('service-list.delete');
    });
});
