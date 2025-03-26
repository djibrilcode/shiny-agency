<?php
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DetailsCommandeController;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ModeReglementController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\UniteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('layout.App');
});
Route::resource('filieres', FiliereController::class);
Route::resource('familles', FamilleController::class);
Route::resource('sous_familles', SousFamilleController::class);
Route::resource('produits', ProduitController::class);
Route::resource('commandes', CommandeController::class);
Route::resource('details_commandes', DetailsCommandeController::class);
Route::resource('unites', UniteController::class);
Route::resource('marques', MarqueController::class);
Route::resource('etats', EtatController::class);
Route::resource('mode_reglements', ModeReglementController::class);
Route::resource('stagiaires', StagiaireController::class);






