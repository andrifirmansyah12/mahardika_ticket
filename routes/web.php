<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;

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

// Login
Route::get('/', function () {
    return view('v_login');
})->name('login');

// Calendar
Route::get('/calendar', [CalendarController::class, 'index']);

// Ticket
Route::get('/ticket', [TicketController::class, 'index'])->name('film');
Route::get('/ticket/tambah', [TicketController::class, 'tambah']);
Route::post('/ticket/tambah_aksi', [TicketController::class, 'tambah_aksi']);
Route::get('/ticket/edit/{id}', [TicketController::class, 'edit']);
Route::post('/ticket/edit_aksi/{id}', [TicketController::class, 'edit_aksi']);
Route::get('/ticket/hapus/{id}', [TicketController::class, 'hapus']);

// Akun
Route::get('/akun', [AkunController::class, 'index'])->name('akun');
Route::get('/akun/tambah', [AkunController::class, 'tambah']);
Route::post('/akun/tambah_aksi', [AkunController::class, 'tambah_aksi']);
Route::get('/akun/edit/{id}', [AkunController::class, 'edit']);
Route::post('/akun/edit_aksi/{id}', [AkunController::class, 'edit_aksi']);
Route::get('/akun/hapus/{id}', [AkunController::class, 'hapus']);

// Home Page
Route::get('/homepage', [HomePageController::class, 'index'])->name('homepage');
Route::get('/homepage/detail{id}', [HomePageController::class, 'detail']);

// Detail Page
// Route::get('/detailpage', [DetailPageController::class, 'index'])->name('detailpage');

Auth::routes();

// Dashboard Admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
