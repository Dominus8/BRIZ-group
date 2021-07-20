<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/download', [MainController::class, 'download']);


Route::get('/admin', [MainController::class, 'admin']) ->name('admin');

//--------------------------------------------------------------------------------------------------------------------------------

Route::post('/admin/create-slide', [MainController::class, 'create_slide']) ->name('create_slide');

Route::get('/admin/dell-slide/{id}', [MainController::class, 'dell_slide']) ->name('dell_slide');

//--------------------------------------------------------------------------------------------------------------------------------

// Создание карточек направления
Route::post('/admin/create-direction-card', [MainController::class, 'create_direction_card']) ->name('create_direction_card'); 

//Удаление карточек направления
Route::get('/admin/dell-directions-card/{id}', [MainController::class, 'dell_directions_card']) ->name('dell_direction_card');

//---------------------------------------------------------------------------------------------------------------------------------

// Создание карточек Контактов
Route::post('/admin/create-contact', [MainController::class, 'create_contact']) ->name('create_contact'); 

//Удаление карточек направления
Route::get('/admin/dell-contact/{id}', [MainController::class, 'dell_contact']) ->name('dell_contact');


