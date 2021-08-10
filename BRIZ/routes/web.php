<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

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

Route::get('/admin', [MainController::class, 'admin']) ->name('admin')->middleware('auth');

//--------------------------------------------------------------------------------------------------------------------------------

Route::post('/admin/create-slide', [MainController::class, 'create_slide']) ->name('create_slide')->middleware('auth');

Route::get('/admin/edit-slide/{id}', [MainController::class, 'edit_slide']) ->name('edit_slide')->middleware('auth');

Route::post('/admin/update-slide/{id}', [MainController::class, 'update_slide']) ->name('update_slide')->middleware('auth');

Route::get('/admin/dell-slide/{id}', [MainController::class, 'dell_slide']) ->name('dell_slide')->middleware('auth');


//--------------------------------------------------------------------------------------------------------------------------------

// Создание карточек направления
Route::post('/admin/create-direction-card', [MainController::class, 'create_direction_card']) ->name('create_direction_card')->middleware('auth');

//Редактирование карточек направления
Route::get('/admin/edit-directions-card/{id}', [MainController::class, 'edit_directions_card']) ->name('edit_direction_card')->middleware('auth');

//обновление карточек направления
Route::post('/admin/update-direction-card/{id}', [MainController::class, 'update_direction_card']) ->name('update_direction_card')->middleware('auth');

//Удаление карточек направления
Route::get('/admin/dell-directions-card/{id}', [MainController::class, 'dell_directions_card']) ->name('dell_direction_card')->middleware('auth');

//---------------------------------------------------------------------------------------------------------------------------------

// Создание карточек Контактов
Route::post('/admin/create-contact', [MainController::class, 'create_contact']) ->name('create_contact')->middleware('auth');

//Изменение карточек направления
Route::get('/admin/edit-contact/{id}', [MainController::class, 'edit_contact']) ->name('edit_contact')->middleware('auth');

//Обновление карточек направления
Route::post('/admin/update-contact/{id}', [MainController::class, 'update_contact']) ->name('update_contact')->middleware('auth');

//Удаление карточек направления
Route::get('/admin/dell-contact/{id}', [MainController::class, 'dell_contact']) ->name('dell_contact')->middleware('auth');



//---------------------------------------------------------------------------------------------------------------------------------
// Загрузка презентации
Route::post('/admin/create-presentation', [MainController::class, 'create_presentation']) ->name('create-presentation')->middleware('auth'); 

//Скачивание презентации
Route::get('/download/download-presentation/{id}', [MainController::class, 'download_presentation']) ->name('download-presentation')->middleware('auth');

//Изменение презентации
Route::get('/admin/edit-presentation/{id}', [MainController::class, 'edit_presentation']) ->name('edit-presentation')->middleware('auth');

//обновление презентации
Route::post('/admin/update-presentation/{id}', [MainController::class, 'update_presentation']) ->name('update-presentation')->middleware('auth');

//Удаление презентации
Route::get('/admin/dell-presentation/{id}', [MainController::class, 'dell_presentation']) ->name('dell-presentation')->middleware('auth');


//-------------------------------------------------------------------------------------------------------------------------------
//обновление карты
Route::post('/admin/update-map', [MainController::class, 'update_map']) ->name('update-map')->middleware('auth');



Route::post('/test', function(Request $request){
    $a=$request->all();
    
    foreach($a as $el){
        $x=$el;
        $y=array_search($el,$a);
        echo( $x.'&nbsp-&nbsp'.$y.'<br>');

    }
    

});

Auth::routes();

Route::get('/home', [MainController::class, 'admin'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
