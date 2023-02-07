<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
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

Route::get('/', [HomeController::class, "index"]);

Route::get('/redirects', [HomeController::class, "redirects"]);



//User
Route::get('/users', [AdminController::class, 'index']);
Route::post('/ustore', [AdminController::class, 'ustore'])->name('ustore');
Route::get('/ufetchall', [AdminController::class, 'ufetchAll'])->name('ufetchAll');
Route::delete('/udelete', [AdminController::class, 'udelete'])->name('udelete');
Route::get('/uedit', [AdminController::class, 'uedit'])->name('uedit');
Route::post('/uupdate', [AdminController::class, 'uupdate'])->name('uupdate');


//Food Menu
Route::get('/food', [AdminController::class, 'fview']);
Route::post('/fstore', [AdminController::class, 'fstore'])->name('fstore');
Route::get('/ffetchall', [AdminController::class, 'ffetchAll'])->name('ffetchAll');
Route::delete('/fdelete', [AdminController::class, 'fdelete'])->name('fdelete');
Route::get('/fedit', [AdminController::class, 'fedit'])->name('fedit');
Route::post('/fupdate', [AdminController::class, 'fupdate'])->name('fupdate');


//Chef
Route::get('/chef', [AdminController::class, 'cview']);
Route::post('/cstore', [AdminController::class, 'cstore'])->name('cstore');
Route::get('/cfetchall', [AdminController::class, 'cfetchAll'])->name('cfetchAll');
Route::delete('/cdelete', [AdminController::class, 'cdelete'])->name('cdelete');
Route::get('/cedit', [AdminController::class, 'cedit'])->name('cedit');
Route::post('/cupdate', [AdminController::class, 'cupdate'])->name('cupdate');


//Reservation
Route::get('/reservation', [AdminController::class, 'rview']);
Route::post('/rstore', [AdminController::class, 'rstore'])->name('rstore');
Route::get('/rfetchall', [AdminController::class, 'rfetchAll'])->name('rfetchAll');
Route::delete('/rdelete', [AdminController::class, 'rdelete'])->name('rdelete');
Route::get('/redit', [AdminController::class, 'redit'])->name('redit');
Route::post('/rupdate', [AdminController::class, 'rupdate'])->name('rupdate');


//Order
Route::get('/order', [AdminController::class, 'oview']);
Route::post('/ostore', [AdminController::class, 'ostore'])->name('ostore');
Route::get('/ofetchall', [AdminController::class, 'ofetchAll'])->name('ofetchAll');
Route::delete('/odelete', [AdminController::class, 'odelete'])->name('odelete');
Route::get('/oedit', [AdminController::class, 'oedit'])->name('oedit');
Route::post('/oupdate', [AdminController::class, 'oupdate'])->name('oupdate');

//for viewing  Image

Route::post('/ajaxuploadimg',[EmpController::class, "imguploadpost"]);





// Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);

// Route::get('/deletemenu/{id}', [AdminController::class, "deletemenu"]);

// Route::get('/updateview/{id}', [AdminController::class, "updateview"]);


Route::post('/addcart/{id}', [HomeController::class, "addcart"]);

Route::get('/showcart/{id}', [HomeController::class, "showcart"]);

Route::get('/remove/{id}', [HomeController::class, "remove"]);

Route::post('/orderconfirm', [HomeController::class, "orderconfirm"]);

// Route::get('/search', [AdminController::class, "search"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
