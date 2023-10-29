<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\homeController;

use App\Http\Controllers\courseController;


use App\Http\Controllers\PruebaController;

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

//USING CONTROLLER
//Routes by GET

// Controller home return string
// http://localhost/firstApp/public/    ROOT
Route::get('/', homeController::class); //Because we are only using the name of the controller and ::class, laravel asume that we are using the method __invoke

//1. index
Route::get('/courses', [courseController::class, 'index'])->name('courses.index');

//2. create
Route::get('/courses/create/', [courseController::class, 'create'])->name('courses.create');

//3. store
Route::post('/courses', [courseController::class, 'store'])->name('courses.store');


//5. edit
Route::get('/courses/{id}/edit', [courseController::class, 'edit'])->name('courses.edit');

//6. update
Route::put('/courses/{id}', [courseController::class, 'update'])->name('courses.update');

//7. destroy
Route::delete('/courses/{id}', [courseController::class, 'destroy'])->name('courses.delete');