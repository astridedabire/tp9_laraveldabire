<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

use App\Http\Controllers\TuteurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/etudiant', [EtudiantController::class,'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class,'ajouter_etudiant']);

Route::post('/ajouter/traitement',[EtudiantController::class,'ajouter_etudiant_traitement']);
Route::get('/update-etudiant/{id} ',[EtudiantController::class,'update_etudiant']);
Route::post('/update/traitement ',[EtudiantController::class,'update_etudiant_traitement']);
Route::get('/delete-etudiant/{id}',[EtudiantController::class, 'delete_etudiant']);
//tuteur route
Route::get('/tuteur', [TuteurController::class, 'liste_tuteur']);
Route::get('/ajouter_tuteur', [TuteurController::class, 'ajouter_tuteur']);
Route::post('/ajouter/traitement_tuteur',[TuteurController::class, 'ajouter_tuteur_traitement']);
Route::get('/update-tuteur/{id}', [TuteurController::class,'update_tuteur']);
Route::post('/update/traitement_tuteur', [TuteurController::class,'update_tuteur_traitement']);
Route::get('/delete-tuteur/{id}', [TuteurController::class,'delete_tuteur']);

// Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
