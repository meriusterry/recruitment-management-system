<?php

use Carbon\Carbon;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
    $data = Vacancy::where('closing_date', '>=', Carbon::today())
    ->orderBy('created_at', 'desc')  // Sort by created_at in descending order
    ->get();
    return view('welcome', compact('data'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/employees', function () {
            return view('employees'); //if you dont have a controller
        })->name('employees');

        Route::get('/users', function () {
            return view('users'); //if you dont have a controller
        })->name('users');

      /*  Route::get('/applicants', function () {
            return view('applicants'); //if you dont have a controller
        })->name('applicants');



Route::get('/process', function () {
    return view('process'); //if you dont have a controller
})->name('process');*/

Route::get('/application-process', function () {
    return view('application-process'); // replace with your actual Blade file name
})->name('application-process');


Route::get('/nnn', function () {
    return view('nnn');
})->name('nnn');

Route::get('/documents', function () {
    return view('documents');
})->name('documents');

Route::get('/applicant_resume', function () {
    return view('applicant_resume'); //if you dont have a controller
})->name('applicant_resume');

        Route::get('/resume', function () {
            return view('resume');
        })->name('resume');
     
    Route::post('/vacancies', [VacancyController::class, 'store'])->name('vacancies.store');
    Route::get('/application', [VacancyController::class, 'index'])->name('application.index');
    Route::get('/career', [VacancyController::class, 'career'])->name('career.career');
    Route::delete('/vacancy/{id}', [VacancyController::class, 'destroy'])->name('vacancy.destroy');

    Route::post('/cvs/store', [CVController::class, 'store'])->name('cvs.store');
   // Route::get('/resume', [CVController::class, 'showResume'])->name('resume.show');
    Route::get('/resume', [CVController::class, 'show'])->name('resume');

 

    ///
    Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');

    Route::get('/resume', [CVController::class, 'showResume'])->name('resume');

Route::get('/dashboard', [DashboardController::class, 'totalvacancy'])->name('dashboard');

////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/applicants/{job}', [ApplicationController::class, 'showApplicants'])->name('applicants');

//Route::get('/process/{user}', [ApplicationController::class, 'process'])->name('process');


Route::get('/process', [ApplicationController::class, 'process'])->name('process');





});


require __DIR__.'/auth.php';




