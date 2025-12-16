
<?php
use App\Http\Controllers\EkosistemController;

Route::get('/ekosistem', [EkosistemController::class, 'index']);
Route::get('/ekosistem/create', [EkosistemController::class, 'create']);
Route::post('/ekosistem', [EkosistemController::class, 'store']);
Route::get('/ekosistem/{id}', [EkosistemController::class, 'show']);
Route::get('/ekosistem/{id}/edit', [EkosistemController::class, 'edit']);
Route::post('/ekosistem/{id}/update', [EkosistemController::class, 'update']);
Route::get('/ekosistem/{id}/delete', [EkosistemController::class, 'destroy']);
