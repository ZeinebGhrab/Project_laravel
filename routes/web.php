<?php

use App\Http\Controllers\employeeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/employee',[employeeController::class,'liste_employee']);
Route::get('/ajouter',[employeeController::class,'ajouter_employee']);
Route::get('/update_employee/{id}',[employeeController::class,'update_employee']);
Route::post('/update/traitement',[employeeController::class,'update_employee_traitement']);
Route::post('/ajouter/traitement',[employeeController::class,'ajouter_employee_traitement']);
Route::get('/delete_employee/{id}',[employeeController::class,'delete_employee']);


