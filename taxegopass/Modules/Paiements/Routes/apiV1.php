<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Paiements\Http\Controllers\Api\V1\{TypeFraisController,PaiementsController};

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

Route::group(['as' => 'taxegopass::api.', 'prefix' => 'paiement'], function () {
  
    Route::controller(PaiementsController::class)->group(function () {
        Route::get('/paiement', 'index')->name('paiement.list');
        Route::post('/paiement', 'store')->name('paiement.store');
        Route::get('/paiement/{id}', 'edit')->name('paiement.edit');
        Route::get('/editbyid/{id}', 'editbyid')->name('paiement.editbyid');
        Route::post('/paiement/{id}', 'update')->name('update');
        Route::delete('/paiement/{id}', 'destroy')->name('paiement.destroy');
        Route::get('/pdf_paiement', 'pdf_paiement')->name('pdf_paiement');
        Route::get('/pdf_allpaiement', 'pdf_allpaiement')->name('pdf_allpaiement');
        Route::get('/sendsms', 'sendsms')->name('sendsms');
        Route::get('paiementcount','paiementcount')->name('paiementcount');
        Route::get('passagercount','passagercount')->name('passagercount');
        Route::get('agentcount','agentcount')->name('agentcount');
        Route::get('typefraiscount','typefraiscount')->name('typefraiscount');
        Route::get('getChart','getChart')->name('getChart');
        Route::get('getChart_mvt','getChart_mvt')->name('getChart_mvt');
        Route::get('getChart_mvt_passager','getChart_mvt_passager')->name('getChart_mvt_passager');
       
        
    });

    Route::controller(TypeFraisController::class)->group(function () {
        Route::get('/typefrais', 'index')->name('typefrais.list');
        Route::post('/typefrais', 'store')->name('typefrais.store');
        Route::get('/typefrais/{id}', 'edit')->name('typefrais.edit');
        Route::post('/typefrais/{id}', 'update')->name('typefrais.update');
        Route::delete('/typefrais/{id}', 'destroy')->name('typefrais.destroy');
        
        
    });

    
   

});