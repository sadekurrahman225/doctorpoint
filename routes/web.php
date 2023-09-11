<?php

use App\Http\Controllers\doctor\PatientController;
use App\Http\Controllers\patient\AppointmentListController;
use App\Http\Controllers\patient\DoctorListController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    //dd(auth()->user()->role);
    if (auth()->user()->role == 2) {
        return view('patient.dashboard');
    } elseif (auth()->user()->role == 1) {
        //dd(1);
        return view('doctor.dashboard');
    }
})->middleware(['auth'])->name('dashboard');


Route::get('/doctors-list', [DoctorListController::class, 'show'])->name('doctors-list');
Route::get('/appointment-list', [AppointmentListController::class, 'show'])->name('appointment-list');
Route::get('/get_appintment/{id}', [DoctorListController::class, 'get_appintment'])->name('appointment-list');

Route::get('/patient-list', [PatientController::class, 'show'])->name('patient-list');
Route::get('/d-appointment-list', [PatientController::class, 'appointments'])->name('d-appointment-list');
Route::get('/d-appointment-list-confirm/{id}', [PatientController::class, 'confirm'])->name('d-appointment-list-confirm');
Route::get('/d-appointment-list-cancel/{id}', [PatientController::class, 'cancel'])->name('d-appointment-list-cancel');
Route::get('/d-appointment-list-visited/{id}', [PatientController::class, 'visited'])->name('d-appointment-list-visited');

require __DIR__ . '/auth.php';
