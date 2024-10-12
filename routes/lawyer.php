<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lawyer\ApplicationController;
use App\Http\Controllers\Lawyer\ProfileController;
use App\Http\Controllers\Lawyer\ScheduleController;

Route::group(
    ['prefix' => 'lawyer', 'as' => 'lawyer.', 'middleware' => ['auth', 'lawyer']],
    function () {
        Route::group(
            ['prefix' => 'applications', 'as' => 'applications.'],
            function () {
                Route::controller(ApplicationController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('create', 'create')->name('create');
                        Route::post('/', 'store')->name('store');
                        Route::get('{id}/edit', 'edit')->name('edit');
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
            ['prefix' => 'schedule', 'as' => 'schedule.'],
            function () {
                Route::controller(ScheduleController::class)->group(
                    function () {
                        Route::get('/', 'index')->name('index');
                    }
                );
            }
        );

    }

);
