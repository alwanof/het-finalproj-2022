<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for ur application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('projects', ProjectController::class);
Route::patch('/projects/{project}/complete', [ProjectController::class, 'complete'])->name('projects.complete');

Route::patch('/tasks/{task}/complete', [TaskController::class, 'update'])->name('tasks.complete');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::post('/tasks/{project}', [TaskController::class, 'store'])->name('tasks.store');

Route::view('/layout/projects', 'projects.index');
Route::view('/layout/projects/create', 'projects.create');
Route::view('/layout/projects/show', 'projects.show');




// projects ==> index GET
// projects/5--> show GET
// projects/create ==> create GET
//projects ==> store  POST

// projects/5/edit ==> edit GET
// projects/5 ==> update PUT/PATCH
// projects/5 ==> destroy DELETE
