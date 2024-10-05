<?php

use App\Http\Controllers\Admin\AmenitiesTypeController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\RoomtypeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\MainController as ControllersMainController;
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

        #AmenityType
        Route::prefix('amenities_type')->group(function () {
            Route::get('add', [AmenitiesTypeController::class, 'create']) ;
            Route::post('add', [AmenitiesTypeController::class, 'store'])->name('amenity_type-add');
            Route::get('list', [AmenitiesTypeController::class, 'index'])->name('amenity_type-list');
            Route::get('edit/{amenity}', [AmenitiesTypeController::class, 'show']);
            Route::post('edit/{amenity}', [AmenitiesTypeController::class, 'update']);
            Route::DELETE('destroy', [AmenitiesTypeController::class, 'destroy']) ;
        });

        #Amenity
        Route::prefix('amenities')->group(function () {
            Route::get('add', [AmenityController::class, 'create']) ;
            Route::post('add', [AmenityController::class, 'store'])->name('amenity-add');
            Route::get('list', [AmenityController::class, 'index'])->name('amenity-list');
            Route::get('edit/{amenity}', [AmenityController::class, 'show']);
            Route::post('edit/{amenity}', [AmenityController::class, 'update']);
            Route::DELETE('destroy', [AmenityController::class, 'destroy']) ;
        });

        #customers
        Route::get('customers', [OrderController::class,'index'])->name('customer-list');
        Route::get('customers/view/{customer}', [OrderController::class, 'show']);
        Route::post('customers/view/{customer}', [OrderController::class, 'show']);
        Route::get('customers/edit/{customer}', [OrderController::class, 'editOrder']);
        Route::post('customers/edit/{customer}', [OrderController::class, 'update']);
        Route::DELETE('customers/destroy', [OrderController::class, 'destroy'])->name('customers.destroy');
        Route::post('customers/view/delivery', [OrderController::class, 'delivery'])->name('delivery');

        #order
        Route::get('/orders', [OrderController::class, 'index_order'])->name('order-list');
    });
});

#client
Route::get('/', [HomeController::class, 'index'])->name('client-home');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('client-rooms');
// Route::get('/rooms', [HomeController::class, 'room_detail'])->name('client-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('client-contact');
Route::get('/about', [HomeController::class, 'about'])->name('client-about');
Route::get('book', [HomeController::class, 'book']);

//Search
Route::get('search', [HomeController::class, 'getSearch'])->name('search');
Route::post('/services/load-room', [HomeController::class, 'loadRoom']);
Route::get('/category/{id}-{slug}.html', [ControllersRoomTypeController::class, 'index']);
Route::get('/room/{id}-{slug}.html', [ControllersRoomController::class, 'index'])->name('detail-room');
Route::get('/room_book/{id}-{slug}.html', [ControllersRoomController::class, 'booking'])->name('client-book');

#order
Route::get('/order', [ControllersMainController::class, 'order']);

#user
Route::get('/login', [UserController::class, 'login'])->name('client-login');
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/register', [UserController::class, 'register'])->name('client-register');
Route::post('/register', [UserController::class, 'postRegister']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

#email
Route::get('test-email', [MainController::class,'testEmail']);

#detail order customer
Route::get('/order-detail-customer', [ControllersMainController::class, 'order_detail_customer'])->name('order_detail_customer');
