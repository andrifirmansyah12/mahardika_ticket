<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\HomeController;

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
Route::get('/ticket', [TicketController::class, 'index']);
Route::get('/ticket/tambah', [TicketController::class, 'tambah']);
Route::get('/ticket/edit', [TicketController::class, 'edit']);

// Akun
Route::get('/akun', [AkunController::class, 'index']);
Route::get('/akun/tambah', [AkunController::class, 'tambah']);
Route::get('/akun/edit', [AkunController::class, 'edit']);

// Detail Page
Route::get('/detailpage', [DetailPageController::class, 'index']);

Auth::routes();

// Dashboard Admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
