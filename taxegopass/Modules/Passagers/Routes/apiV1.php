<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Passagers\Http\Controllers\Api\V1\{PassagersController,AdressesController};

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

Route::group(['as' => 'taxegopass::api.', 'prefix' => 'passager'], function () {
    Route::controller(PassagersController::class)->group(function () {
        Route::get('/passager', 'index')->name('passager.list');
        Route::post('/passager', 'store')->name('passager.store');
        Route::get('/passagert/{id}', 'edit')->name('passager.edit');
        Route::post('/passager/{id}', 'update')->name('passager.update');
        Route::delete('/passager/{id}', 'destroy')->name('passager.destroy');
        Route::get('/pdf_allpassager', 'pdf_allpassager')->name('pdf_allpassager');
        
    });

    Route::controller(AdressesController::class)->group(function () {
        Route::get('/adresse', 'index')->name('adresse.list');
        Route::post('/adresse', 'store')->name('adresse.store');
        Route::get('/adresse/{id}', 'edit')->name('adresse.edit');
        Route::post('/adresse/{id}', 'update')->name('adresse.update');
        Route::delete('/adresse/{id}', 'destroy')->name('adresse.destroy');
    });

});