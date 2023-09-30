<?php

use App\Http\Livewire\Profile;
use App\Http\Livewire\Patient\Home;
use App\Http\Livewire\Patient\Notes;
use App\Http\Livewire\Doctor\Patient;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Doctor\Dashboard;
use App\Http\Livewire\Doctor\DoctorNote;
use App\Http\Livewire\Patient\Insurance;
use App\Http\Livewire\Patient\Appointment;
use App\Http\Livewire\Doctor\DoctorAppointment;
use App\Http\Livewire\Patient\Doctor\VitalSigns;
use App\Http\Livewire\Patient\Doctor\PhysicalExam;
use App\Http\Livewire\Patient\Doctor\Recomendation;
use App\Http\Livewire\Patient\History\AlergyHistory;
use App\Http\Livewire\Patient\History\FamilyHistory;
use App\Http\Livewire\Patient\History\MedicalHistory;

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

Route::group(['middleware' => 'auth','account'], function () {
    Route::get('/',Home::class)->name('patient.home');
    Route::get('/patient/insurance',Insurance::class)->name('patient.insurance');
    Route::get('/patient/notes',Notes::class)->name('patient.notes');
    Route::get('/patient/appointment',Appointment::class)->name('patient.appointment');
    Route::get('/patient/history/medical',MedicalHistory::class)->name('patient.history.medical');
    Route::get('/patient/history/allergy',AlergyHistory::class)->name('patient.history.allergy');
    Route::get('/patient/history/family',FamilyHistory::class)->name('patient.history.family');
    Route::get('/patient/history/vitals',VitalSigns::class)->name('patient.doctor.vitals');
    Route::get('/patient/history/exam',PhysicalExam::class)->name('patient.doctor.exam');
    Route::get('/patient/history/recomendations',Recomendation::class)->name('patient.doctor.recomendations');

    Route::get('/dashboard',Dashboard::class)->name('doctor.home');
    Route::get('/doctor/notes',DoctorNote::class)->name('doctor.notes');
    Route::get('/doctor/appointment',DoctorAppointment::class)->name('doctor.appointment');
    Route::get('/doctor/patients',Patient::class)->name('doctor.patients');

    Route::get('/profile',Profile::class)->name('profile');
});

require __DIR__.'/auth.php';
