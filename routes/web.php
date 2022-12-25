<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Project;

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
