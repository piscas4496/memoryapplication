<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agents\AgentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\LoginController;
use Modules\Agents\Http\Controllers\Api\V1\AgentsController;
use Modules\Passagers\Http\Controllers\Api\V1\{AdressesController,PassagersController};
use Modules\Paiements\Http\Controllers\Api\V1\{PaiementsController,TypeFraisController};
use Modules\Vols\Http\Controllers\Api\V1\{AvionsController,CompagniesController,VolsController};


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

 Route::get('/login', function () {
    return view('login');
});
//Route::prefix('/')->middleware('auth')->group(function(){
    Route::get('/login', [LoginController::class, 'start'])->name('login');
    Route::post('/login', [LoginController::class, 'loginuser']); 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.show');
    Route::get('/vol', [Modules\Vols\Http\Controllers\Api\V1\VolsController::class, 'getVol'])->name('vol.show');
    Route::get('/avion', [Modules\Vols\Http\Controllers\Api\V1\AvionsController::class, 'getAvion'])->name('avion.show');
    Route::get('/agent', [Modules\Agents\Http\Controllers\Api\V1\AgentsController::class, 'getAgent'])->name('agent.show');
    Route::get('/compagnie', [Modules\Vols\Http\Controllers\Api\V1\CompagniesController::class, 'getCompagnie'])->name('compagnie.show');
    Route::get('/adresse', [Modules\Passagers\Http\Controllers\Api\V1\AdressesController::class, 'getAdresse'])->name('adresse.show');
    Route::get('/passager', [Modules\Passagers\Http\Controllers\Api\V1\PassagersController::class, 'getPassager'])->name('passager.show');
    Route::get('/paiement', [Modules\Paiements\Http\Controllers\Api\V1\PaiementsController::class, 'getPaiement'])->name('paiement.show');
    Route::get('/pdfpaiement', [PaiementsController::class, 'pdfPaiement'])->name('pdfpaiement.show');
    Route::get('/typepaiement', [TypeFraisController::class, 'getTypePaiement'])->name('typepaiement.show');
    Route::get('qrcode/{id}', [PaiementsController::class, 'generate'])->name('generate'); 
    Route::get('/pdfpassager',[PassagersController::class,'printallpassager'])->name('printallpassager');
    Route::get('/pdfagent',[PassagersController::class,'printallagent'])->name('printallagent');  
//});
