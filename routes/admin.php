<?php


Route::view('/backpanel', 'backpanel.dashboard.index')->name('backpanel.dashboard');

//Route::view('/back', 'welcomeback');
//user routes
// Route::get('/backpanel/users', 'User\UserController@index')->name('user.index');
Route::get('/backpanel/users', [App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');
Route::get('/backpanel/users/create', [App\Http\Controllers\User\UserController::class, 'create'])->name('user.create');
Route::post('/backpanel/users/create', [App\Http\Controllers\User\UserController::class, 'store'])->name('user.store');
Route::get('/backpanel/users/{user}/edit', [App\Http\Controllers\User\UserController::class, 'edit'])->name('user.edit');
Route::put('/backpanel/users/{user}/edit', [App\Http\Controllers\User\UserController::class, 'update'])->name('user.update');
Route::delete('/backpanel/users/{user}/edit', [App\Http\Controllers\User\UserController::class, 'destroy'])->name('user.destroy');
// User Role
// Route::resource('/backpanel/role', App\Http\Controllers\User\RoleController::class);

//Category route
Route::get('/backpanel/category/trashed', [App\Http\Controllers\User\CategoryController::class, 'trashCategory'])
    ->name('category.trash');
Route::post('/backpanel/category/{category}/restore', [App\Http\Controllers\User\CategoryController::class, 'restoreCategory'])
    ->name('category.restore');
Route::delete('/backpanel/category/{category}/delete', [App\Http\Controllers\User\CategoryController::class, 'forceDeleteCategory'])
    ->name('category.force.delete');
Route::resource('/backpanel/category', App\Http\Controllers\User\CategoryController::class);


//post route
Route::get('/backpanel/post/trashed', [App\Http\Controllers\User\PostController::class, 'trashPost'])
    ->name('post.trash');
Route::post('/backpanel/post/{post}/restore', [App\Http\Controllers\User\PostController::class, 'restorePost'])
    ->name('post.restore');
Route::delete('/backpanel/post/{post}/delete', [App\Http\Controllers\User\PostController::class, 'forceDeletePost'])
    ->name('post.force.delete');
Route::resource('/backpanel/post', App\Http\Controllers\User\PostController::class);

