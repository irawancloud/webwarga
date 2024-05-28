<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SellerController;

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


Route::get('/', [PageController::class, 'index'])->name('index')->middleware('guest');

Route::get('/paguyuban/pengurus', [PageController::class, 'pengurus'])->name('pengurus')->middleware('guest');
Route::get('/paguyuban/laporan', [PageController::class, 'laporan'])->name('laporan')->middleware('guest');
Route::get('/paguyuban/dkm', [PageController::class, 'dkm'])->name('dkm')->middleware('guest');
Route::get('/paguyuban/oikumene', [PageController::class, 'oikumene'])->name('oikumene')->middleware('guest');
Route::get('/paguyuban/adart', [PageController::class, 'adart'])->name('adart')->middleware('guest');
Route::get('/paguyuban/programKerja', [PageController::class, 'programKerja'])->name('programKerja')->middleware('guest');
Route::get('/paguyuban/dokumentasi', [PageController::class, 'dokumentasi'])->name('dokumentasi')->middleware('guest');
Route::get('/paguyuban/laporan', [PageController::class, 'laporan'])->name('laporan')->middleware('guest');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri')->middleware('guest');
Route::get('/blog', [PageController::class, 'blog'])->name('blog')->middleware('guest');
Route::get('/blogDetail/{slug}', [PageController::class, 'blogDetail'])->name('blogDetail')->middleware('guest');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak')->middleware('guest');
Route::get('/umkm', [PageController::class, 'umkm'])->name('umkm')->middleware('guest');
Route::get('/umkmDetail/{slug}', [PageController::class, 'umkmDetail'])->name('umkmDetail')->middleware('guest');



// Admin
Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);
Route::get('/home', [AdminController::class, 'home'])->name('home')->middleware('auth');
Route::resource('/post', BlogController::class)->middleware('auth');
Route::resource('/imageGallery', GalleryController::class)->middleware('auth');
Route::resource('/seller', SellerController::class)->middleware('auth');

