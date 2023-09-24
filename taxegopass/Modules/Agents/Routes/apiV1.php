<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Agents\Http\Controllers\Api\V1\AgentsController;

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

Route::group(['as' => 'taxegopass::api.', 'prefix' => 'agent'], function () {
    
        Route::controller(AgentsController::class)->group(function () {
        Route::get('/agent', 'index')->name('agent.list');
        Route::post('/agent', 'store')->name('agent.store');
        Route::get('/agent/{id}', 'edit')->name('agent.edit');
        Route::post('/agent/{id}', 'update')->name('agent.update');
        Route::delete('/agent/{id}', 'destroy')->name('agent.destroy');
        Route::get('/pdf_allagent', 'pdf_allagent')->name('pdf_allagent');
        
    });

});