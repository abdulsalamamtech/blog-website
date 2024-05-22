<?php

use Illuminate\Http\Request;
use app\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


// Authentication file
require __DIR__.'/api-auth.php';


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum', 'role:user'])->group(function(){

});



Route::middleware(['auth:sanctum'])->group(function(){
    // Notes route
    Route::apiResource('notes', NoteController::class);
});




Route::get('run', function(){
    return 'running...';
});
