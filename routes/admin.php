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
        Route::get('/home', [App\Http\Controllers\Admin\LayoutHomeController::class, 'index'])->name('home');
        Route::post('/home', [App\Http\Controllers\Admin\LayoutHomeController::class, 'store'])->name('home.save');

        Route::get('/about-us', [App\Http\Controllers\Admin\LayoutAboutUsController::class, 'index'])->name('about-us');
        Route::post('/about-us', [App\Http\Controllers\Admin\LayoutAboutUsController::class, 'store'])->name('about-us.save');

        Route::get('/skills', [App\Http\Controllers\Admin\LayoutSkillController::class, 'index'])->name('skills');
        Route::post('/skills', [App\Http\Controllers\Admin\LayoutSkillController::class, 'store'])->name('skills.add');
        Route::get('/skills/{id}', [App\Http\Controllers\Admin\LayoutSkillController::class, 'get'])->name('skills.get');
        Route::post('/skills/edit', [App\Http\Controllers\Admin\LayoutSkillController::class, 'update'])->name('skills.edit');
        Route::delete('/skills/{id}', [App\Http\Controllers\Admin\LayoutSkillController::class, 'destroy'])->name('skills.delete');

        Route::get('/work-category', [App\Http\Controllers\Admin\WorkCategoryController::class, 'index'])->name('work-category');
        Route::post('/work-category', [App\Http\Controllers\Admin\WorkCategoryController::class, 'store'])->name('work-category.add');
        Route::get('/work-category/{id}', [App\Http\Controllers\Admin\WorkCategoryController::class, 'get'])->name('work-category.get');
        Route::post('/work-category/edit', [App\Http\Controllers\Admin\WorkCategoryController::class, 'update'])->name('work-category.edit');
        Route::delete('/work-category/{id}', [App\Http\Controllers\Admin\WorkCategoryController::class, 'destroy'])->name('work-category.delete');

        Route::get('/work', [App\Http\Controllers\Admin\LayoutWorkController::class, 'index'])->name('work');
        Route::post('/work', [App\Http\Controllers\Admin\LayoutWorkController::class, 'store'])->name('work.add');
        Route::get('/work/{id}', [App\Http\Controllers\Admin\LayoutWorkController::class, 'get'])->name('work.get');
        Route::post('/work/edit', [App\Http\Controllers\Admin\LayoutWorkController::class, 'update'])->name('work.edit');
        Route::delete('/work/{id}', [App\Http\Controllers\Admin\LayoutWorkController::class, 'destroy'])->name('work.delete');
    });
});

