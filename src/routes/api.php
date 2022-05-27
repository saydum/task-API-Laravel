<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotebookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('all', [NotebookController::class, ''])->name('notebook.all');
Route::post('add', [NotebookController::class, ''])->name('notebook.add');
Route::get('get/{Notebook}', [NotebookController::class, ''])->name('notebook.get');
Route::put('update/{Notebook}', [NotebookController::class, ''])->name('notebook.update');
Route::delete('delete/{Notebook}', [NotebookController::class, ''])->name('notebook.delete');
