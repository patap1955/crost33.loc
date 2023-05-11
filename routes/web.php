<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\PageController::class, "index"])->name("index");
Route::get('/services/{title}', [\App\Http\Controllers\PageController::class, "services"])->name("services");
Route::get('/download-price', [\App\Http\Controllers\PageController::class, "downloadPrice"])->name("download-price");
Route::post('/form-contacts', [\App\Http\Controllers\PageController::class, "formContacts"])->name("form-contacts");
Route::get('/portfolio', [\App\Http\Controllers\PageController::class, "portfolio"])->name("portfolio");
Route::get("/politics", [\App\Http\Controllers\PageController::class, "politics"])->name('politics');

Auth::routes();

Route::prefix('amg-admin')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\AdminController::class)->name("admin.index");
    Route::resource("gallery", \App\Http\Controllers\Admin\AdminGallaryController::class);
    Route::resource("price", \App\Http\Controllers\Admin\AdminPriceController::class);
    Route::post("download-price/{page}", [\App\Http\Controllers\Admin\AdminPriceController::class, "downloadPrice"])->name("download-price");
    Route::get("contacts", [\App\Http\Controllers\Admin\AdminContactsController::class, "index"])->name("admin.contacts");
    Route::patch("contacts/{contact}", [\App\Http\Controllers\Admin\AdminContactsController::class, "completedStatus"])->name("admin.contacts.completed");
    Route::get("setting", [\App\Http\Controllers\Admin\SettingsController::class, "index"])->name("setting.index");
    Route::patch("setting/{setting}", [\App\Http\Controllers\Admin\SettingsController::class, "update"])->name("setting.update");
});
