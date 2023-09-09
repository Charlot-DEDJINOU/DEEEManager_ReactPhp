<?php
use App\Http\Controllers\UserController ;
use App\Http\Controllers\NotificationController ;
use App\Http\Controllers\MaterielController ;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\LieuDepotController;
use Illuminate\Support\Facades\Route;

Route::post('/login',  [UserController::class, 'authenticate']);
Route::post('/register' , [UserController::class, 'create']) ;
Route::post('/update' , [UserController::class, 'update']) ;
Route::get('/user' , [UserController::class, 'getUser']) ;
Route::get('/users' , [UserController::class, 'getUsers']) ;
Route::get('/logout' , [UserController::class, 'logout']) ;
Route::post('/store' , [NotificationController::class, 'store']) ;
Route::get('/notifications' , [NotificationController::class, 'index']) ;
Route::get('/notification/{notification}' , [NotificationController::class, 'show']) ;
Route::post('/notification/update/{notification}' , [NotificationController::class, 'update']) ;
Route::get('/user/notifications' , [NotificationController::class, 'userNotifications']) ;
Route::post('/createMateriel' , [MaterielController::class, 'create']) ;
Route::get('/materiels' , [MaterielController::class, 'getMateriels']) ;
Route::post('/ville' , [VilleController::class , 'create']);
Route::get('/villes' , [VilleController::class , 'read']);
Route::post('/quartier' , [QuartierController::class , 'create']);
Route::get('/quartiers' , [QuartierController::class , 'read']);
Route::post('/lieuDepot' , [LieuDepotController::class , 'create']);
Route::get('/lieuDepots' , [LieuDepotController::class , 'read']);