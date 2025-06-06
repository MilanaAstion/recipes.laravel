<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TagController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/single/{id}', [MainController::class, 'single'])->name('recipes.single');
Route::get('/tags', [MainController::class, 'tags'])->name('recipes.tags');
Route::get('/recipes', [MainController::class, 'recipes'])->name('recipes.all');
Route::get('/admin/recipes', [RecipeController::class, 'index'])->name('admin.recipes');
Route::get('/admin/tags', [TagController::class, 'index'])->name('admin.tags');