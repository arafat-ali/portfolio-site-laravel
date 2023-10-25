<?php

use App\Http\Controllers\Web\ExperienceController;
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

Route::get('/', function () {
    return view('website.pages.home');
})->name('home');


Route::get('/experience', [ExperienceController::class, 'list']);
Route::get('/experience/{id}', [ExperienceController::class, 'show']);
Route::get('/projects', [ExperienceController::class, 'listOfProjects']);
Route::get('/projects/{experiencId}', [ExperienceController::class, 'projectsInExperience'])->name('project-by-exp');
