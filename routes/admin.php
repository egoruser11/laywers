<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CourtController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'admin', 'as' => 'admin.','middleware' => ['auth','admin']],
    function () {
        Route::group(
            ['prefix' => 'courts', 'as' => 'courts.'],
            function () {
                Route::controller(CourtController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}/edit','edit')->name('edit');
                        Route::post('{id}', 'update')->name('update');
                        Route::get('destroy/{id}', 'destroy')->name('destroy');
                    }
                );
            }
        );
        Route::group(
            ['prefix' => 'topics', 'as' => 'topics.'],
            function () {
                Route::controller(TopicController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}/edit','edit')->name('edit');
                        Route::post('{id}', 'update')->name('update');
                        Route::get('destroy/{id}', 'destroy')->name('destroy');
                    }
                );
            }
        );
        Route::group(
            ['prefix' => 'applications', 'as' => 'applications.'],
            function () {
                Route::controller(ApplicationController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}/edit','edit')->name('edit');
                        Route::post('{id}', 'update')->name('update');
                        Route::get('destroy/{id}', 'destroy')->name('destroy');
                    }
                );
            }
        );
        Route::group(
            ['prefix' => 'users', 'as' => 'users.'],
            function () {
                Route::controller(UserController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}/edit','edit')->name('edit');
                        Route::post('{id}', 'update')->name('update');
                        Route::get('{id}/destroy', 'destroy')->name('destroy');
                        Route::post('{id}/update/password','updatePassword')->name('update.password');
                    }
                );
            }
        );
        Route::group(
            ['prefix' => 'clients', 'as' => 'clients.'],
            function () {
                Route::controller(ClientController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}/edit','edit')->name('edit');
                        Route::post('{id}', 'update')->name('update');
                        Route::get('destroy/{id}', 'destroy')->name('destroy');
                    }
                );
            }
        );
        Route::group(
            ['prefix' => 'profile', 'as' => 'profile.'],
            function () {
                Route::controller(ProfileController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::post('/update/password', 'updatePassword')->name('update.password');
                        Route::post('/', 'update')->name('update');
                    }
                );
            }
        );
    }
);
