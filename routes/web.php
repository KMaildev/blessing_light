<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MDController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('/md', [MDController::class, 'index'])->name('md.index');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('process', [ProcessController::class, 'index'])->name('process.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('jobapply', [JobController::class, 'index'])->name('job.index');
Route::get('employer', [EmployerController::class, 'index'])->name('employer.index');
Route::get('activities', [ActivitiesController::class, 'index'])->name('activities.index');

Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('job', JobController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);





