<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\RoomtypeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\RoomTypeController as ControllersRoomTypeController;
use App\Http\Controllers\RoomController as ControllersRoomController;
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
#admin

Route::get('admin/users/login',[LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class,'index'])->name('admin');
        Route::get('/home', [MainController::class,'home'])->name('home_admin');

        Route::get('main', [MainController::class,'index']);
    
    
        #Roomtypes
        Route::prefix('roomtypes')->group(function () {
            Route::get('add', [RoomtypeController::class, 'create']) ;
            Route::post('add', [RoomtypeController::class, 'store'])->name('roomtypes-add');
            Route::get('list', [RoomtypeController::class, 'index'])->name('roomtypes-list');
            Route::get('edit/{roomtype}', [RoomtypeController::class, 'show']);
            Route::post('edit/{roomtype}', [RoomtypeController::class, 'update']);
            Route::DELETE('destroy', [RoomtypeController::class, 'destroy']) ;
        });
        
        
        #Rooms
        Route::prefix('rooms')->group(function () {
            Route::get('add', [RoomController::class, 'create']) ;
            Route::post('add', [RoomController::class, 'store'])->name('room-add');
            Route::get('list', [RoomController::class, 'index'])->name('room-list');
            Route::get('edit/{room}', [RoomController::class, 'show']);
            Route::post('edit/{room}', [RoomController::class, 'update']);
            Route::DELETE('destroy', [RoomController::class, 'destroy']) ;
        });

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);
        
        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']) ;
            Route::post('add', [SliderController::class, 'store'])->name('slider-add');
            Route::get('list', [SliderController::class, 'index'])->name('slider-list');
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']) ;
        });

    });

});

#client

Route::get('/', [HomeController::class, 'index'])->name('client-home');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('client-rooms');
// Route::get('/rooms', [HomeController::class, 'room_detail'])->name('client-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('client-contact');
Route::get('/about', [HomeController::class, 'about'])->name('client-about');
Route::get('book', [HomeController::class, 'book'])->name('client-book');


Route::post('/services/load-room', [HomeController::class, 'loadRoom']);

Route::get('/category/{id}-{slug}.html', [ControllersRoomTypeController::class, 'index']);
Route::get('/room/{id}-{slug}.html', [ControllersRoomController::class, 'index'])->name('detail-room');
#user

Route::get('/login', [UserController::class, 'login'])->name('client-login');
Route::get('/register', [UserController::class, 'register'])->name('client-register');


