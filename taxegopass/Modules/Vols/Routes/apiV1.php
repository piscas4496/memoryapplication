<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Vols\Http\Controllers\Api\V1\{VolsController,CompagnieComtroller,AvionsController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/auth', function (Request $request) {
//     return $request->user();
// });

Route::group(['as' => 'taxegopass::api.', 'prefix' => 'vol'], function () {
    Route::controller(VolsController::class)->group(function () {
        Route::get('/vol', 'index')->name('vol.list');
        Route::post('/vol', 'store')->name('vol.store');
        Route::get('/vol/{id}', 'edit')->name('vol.edit');
        Route::post('/vol/{id}', 'update')->name('vol.update');
        Route::delete('/vol/{id}', 'destroy')->name('vol.destroy');
    });

    Route::controller(AvionsController::class)->group(function () {
        Route::get('/avion', 'index')->name('avion.list');
        Route::post('/avion', 'store')->name('avion.store');
        Route::get('/avion/{id}', 'edit')->name('avion.edit');
        Route::post('/avion/{id}', 'update')->name('avion.update');
        Route::delete('/avion/{id}', 'destroy')->name('avion.destroy');
    });

    Route::controller(CompagniesController::class)->group(function () {
        Route::get('/compagnie', 'index')->name('compagnie.list');
        Route::post('/compagnie', 'store')->name('compagnie.store');
        Route::get('/compagnie/{id}', 'edit')->name('compagnie.edit');
        Route::post('/compagnie/{id}', 'update')->name('compagnie.update');
        Route::delete('/compagnie/{id}', 'destroy')->name('compagnie.destroy');
    });

});