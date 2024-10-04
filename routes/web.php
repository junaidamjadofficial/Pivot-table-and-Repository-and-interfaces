<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create/user/{name}/{email}/{password}',[UserController::class,'store'])->name('user.name');
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('users.delete');
Route::get('/create/role/{name}',[RoleController::class,'store'])->name('role.name');
Route::get('/roles',[RoleController::class,'index'])->name('role.name');


// Route to attach a role to a user
Route::get('/users/{user_id}/roles/attach/{role_id}', [UserController::class, 'attachRole']);

// Route to detach a role from a user
Route::get('/users/{user_id}/roles/detach/{role_id}', [UserController::class, 'detachRole']);

// Route to sync roles for a user
Route::get('/users/{user_id}/roles/sync', [UserController::class, 'syncRoles']);

// Route to display all roles for a specific user
Route::get('/users/{user_id}/roles', [UserController::class, 'showRoles']);
