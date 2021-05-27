<?php


Route::view('/backpanel', 'backpanel.dashboard.index')->name('backpanel.dashboard');

//user routes
// Route::get('/backpanel/users', 'User\UserController@index')->name('user.index');
Route::get('/backpanel/users', [App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');
Route::get('/backpanel/users/create', [App\Http\Controllers\User\UserController::class, 'create'])->name('user.create');