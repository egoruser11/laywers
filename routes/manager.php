<?php

use App\Http\Controllers\Manager\ApplicationController;
use App\Http\Controllers\Manager\ClientController;
use App\Http\Controllers\Manager\CourtController;
use App\Http\Controllers\Manager\LawyerController;
use App\Http\Controllers\Manager\ProfileController;
use App\Http\Controllers\Manager\TicketController;
use App\Http\Controllers\Manager\TopicController;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'manager', 'as' => 'manager.','middleware' => ['auth','manager']],
    function () {
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
            ['prefix' => 'lawyers', 'as' => 'lawyers.'],
            function () {
                Route::controller(LawyerController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}/edit','edit')->name('edit');
                        Route::post('{id}', 'update')->name('update');
                        Route::get('destroy/{id}', 'destroy')->name('destroy');
                        Route::post('{id}/update/password','updatePassword')->name('update.password');
                    }
                );
            }
        );
        Route::group(
            ['prefix' => 'tickets', 'as' => 'tickets.'],
            function () {
                Route::controller(TicketController::class)->group(
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

    }

);
