<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TicketPageController;

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

Route::post('/send-mail', [ContactController::class, 'sendmail'])->name('send-mail');

// Route::get('/welcome', function () {
//     return view('layouts.app');
// })->name('welcome');

Route::group(['middleware' => ['auth']], function () {
    // Dashboard Admin
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index','detail',])->name('home');

    // Calendar
    Route::get('/calendar', [CalendarController::class, 'index']);

    // Profile Admin
    Route::get('/profile', function () {
        return view('admin.profile.v_profile');
    })->name('profile');

    // Ticket
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/tambah', [BlogController::class, 'tambah']);
    Route::post('/blog/tambah_aksi', [BlogController::class, 'tambah_aksi']);
    Route::get('/blog/detailblog/{id}', [BlogController::class, 'detailblog']);
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
    Route::post('/blog/edit_aksi/{id}', [BlogController::class, 'edit_aksi']);
    Route::get('/blog/hapus/{id}', [BlogController::class, 'hapus']);

    // Ticket
    Route::get('/ticket', [TicketController::class, 'index'])->name('film');
    Route::get('/ticket/tambah', [TicketController::class, 'tambah']);
    Route::post('/ticket/tambah_aksi', [TicketController::class, 'tambah_aksi']);
    Route::get('/ticket/detailticket/{id}', [TicketController::class, 'detailticket']);
    Route::get('/ticket/edit/{id}', [TicketController::class, 'edit']);
    Route::post('/ticket/edit_aksi/{id}', [TicketController::class, 'edit_aksi']);
    Route::get('/ticket/hapus/{id}', [TicketController::class, 'hapus']);

    // Akun
    Route::get('/akun', [AkunController::class, 'index'])->name('akun');
    Route::get('/akun/tambah', [AkunController::class, 'tambah']);
    Route::get('/akun/detailakun/{id}', [AkunController::class, 'detailakun']);
    Route::post('/akun/tambah_aksi', [AkunController::class, 'tambah_aksi']);
    Route::get('/akun/edit/{id}', [AkunController::class, 'edit']);
    Route::post('/akun/edit_aksi/{id}', [AkunController::class, 'edit_aksi']);
    Route::get('/akun/hapus/{id}', [AkunController::class, 'hapus']);
    // Route::get('/akun/hapusTerpilih', [AkunController::class, 'hapusTerpilih']);
});

// Home Page
Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/homepage', [HomePageController::class, 'index'])->name('homepage');
Route::get('/homepage/detail{id}', [HomePageController::class, 'detail']);
Route::get('/aboutus', [HomePageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
Route::get('/ticket_concert', [TicketPageController::class, 'ticket'])->name('ticket');
Route::get('/ticket_concert/detail{id}', [TicketPageController::class, 'detail']);
Route::get('/galeri', [HomePageController::class, 'galeri'])->name('galeri');
Route::get('/store', [HomePageController::class, 'store'])->name('store');
Route::get('/latihan', [HomePageController::class, 'latihan'])->name('latihan');

// Detail Page
// Route::get('/detailpage', [DetailPageController::class, 'index'])->name('detailpage');

Auth::routes();

