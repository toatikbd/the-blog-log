<?php

use App\Http\Controllers\User\RoleController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/backpanel/role{role}/assign-permission',
    [App\Http\Controllers\User\RoleController::class, 'assignPermissionView'])
    ->name('role.assign.permission');

Route::post('/backpanel/role{role}/assign-permission',
    [App\Http\Controllers\User\RoleController::class, 'assignPermission'])
    ->name('role.store.permission');

Route::resource('/backpanel/role', App\Http\Controllers\User\RoleController::class);

Route::resource('/backpanel/permission', App\Http\Controllers\User\PermissionController::class);
require 'admin.php';

// Route::get('/add-roles', function () {
//     $roles = [
//         ['name' => 'admin', 'guard_name'=>'web'],
//         ['name' => 'author', 'guard_name'=>'web'],
//         ['name' => 'editor', 'guard_name'=>'web'],
//     ];
//     $role = Role::insert($roles);
//     return "success";
// });

