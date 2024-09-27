<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CompanyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['middlware' => 'guest'])->group(function () {

    Route::get('login', [AuthController::class, 'login'])->name('view.login');
    Route::post('submitlogin', [AuthController::class, 'submitlogin'])->name('login');
});
Route::middleware(['auth'])->group(function () {

                        // Dashboard Routes
    Route::controller(DashboardController::class,)->group(function() {
        Route::get('home', 'show')->name('dashboard');
    });
                // User Routes
    Route::prefix('user')->group(function() {
        Route::controller(UserController::class,)->group(function() {
            // Route::get('show', 'show')->name('user.show')->can('check-permission' , 'user_view');Route::get('show', [UserController::class, 'show'])
            // ->name('user.show')
            // ->middleware('can:check-permission,user_view');
            Route::get('show', 'show')->name('user.show');
            Route::get('create', 'create')->name('user.create');
            Route::post('store', 'store')->name('user.store');
            Route::get('edit/{id}', 'edit')->name('user.edit');
            Route::put('update/{id}', 'update')->name('user.update');
            Route::delete('delete/{id}', 'delete')->name('user.delete');
        });
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('role')->group(function() {
        Route::controller(RoleController::class,)->group(function() {
            Route::get('show', 'show')->name('role.show');
            Route::get('assign', 'assign')->name('role.assign');
            Route::get('create', 'create')->name('role.create');
            Route::post('store', 'store')->name('role.store');
            Route::get('edit/{id}', 'edit')->name('role.edit');
            Route::put('update/{id}', 'update')->name('role.update');
            Route::delete('delete/{id}', 'delete')->name('role.delete');
        });
    });


    Route::prefix('company')->group(function() {
        Route::controller(CompanyController::class,)->group(function() {
            Route::get('show', 'show')->name('company.show');
            Route::get('create', 'create')->name('company.create');
            Route::post('store', 'store')->name('company.store');
            Route::get('trash/{id}', 'trash')->name('company.trash');
            Route::get('view/trash/{id}', 'view_trash')->name('company.view_trash');
            Route::get('restore{id}', 'restore')->name('company.restore');
        });
    });
});
