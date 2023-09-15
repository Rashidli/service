<?php

use App\Http\Controllers\ActController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[FrontController::class, 'main_page'])->name('main_page');
Route::get('/register',[FrontController::class,'register'])->name('main_register');
Route::get('/login',[FrontController::class,'login'])->name('main_login');
Route::post('/main_login_submit',[CustomerController::class,'login_submit'])->name('main_login_submit');
Route::post('/register_submit',[CustomerController::class,'register_submit'])->name('main_register_submit');
Route::get('/logout',[CustomerController::class,'logout'])->name('main_logout');
Route::get('/test',[FrontController::class,'test'])->name('test');

Route::group(['middleware'=>'main_auth'],function (){

   Route::get('/personal',[ProfileController::class,'personal'])->name('personal');
   Route::get('/pending',[ProfileController::class,'pending'])->name('pending');
   Route::get('/expired',[ProfileController::class,'expired'])->name('expired');
   Route::get('/adds',[ProfileController::class,'adds'])->name('adds');

   Route::post('/profile_update',[CustomerController::class,'profile_update'])->name('profile_update');

   Route::get('/isaxtaran',[FrontController::class,'isaxtaran'])->name('isaxtaran');
   Route::get('/isciaxtaran',[FrontController::class,'isciaxtaran'])->name('isciaxtaran');
   Route::get('/mehsulaxtaran',[FrontController::class,'mehsulaxtaran'])->name('mehsulaxtaran');
   Route::get('/mehsulsatan',[FrontController::class,'mehsulsatan'])->name('mehsulsatan');


   Route::post('/isaxtaran_post',[AddController::class,'isaxtaran_post'])->name('isaxtaran_post');
   Route::post('/isciaxtaran_post',[AddController::class,'isciaxtaran_post'])->name('isciaxtaran_post');
   Route::post('/mehsulaxtaran_post',[AddController::class,'mehsulaxtaran_post'])->name('mehsulaxtaran_post');
   Route::post('/mehsulsatan_post',[AddController::class,'mehsulsatan_post'])->name('mehsulsatan_post');

});

Route::get('/admin', [PageController::class,'login'])->name('login');
Route::post('/login_submit',[AuthController::class,'login_submit'])->name('login_submit');

Route::group(['middleware' =>'auth','prefix'=>'admin'], function (){

    Route::get('/register', [PageController::class,'register'])->name('register');
    Route::post('/register_submit',[AuthController::class,'register_submit'])->name('register_submit');

    Route::get('/home', [PageController::class,'home'])->name('home');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::resource('users',UserController::class);
    Route::resource('roles',RoleController::class);
    Route::resource('permissions',PermissionController::class);
    Route::resource('customers',\App\Http\Controllers\admin\CustomerController::class);

    Route::resource('acts',ActController::class);

});
