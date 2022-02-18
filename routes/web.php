<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use Livewire\Component;
use App\Http\Livewire\LiveWatch;
use App\Http\Livewire\MediaUploadComponent;
use App\Http\Livewire\VideoManager;
use App\Http\Livewire\Sports;
use App\Http\Livewire\TvSeriesComponent;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware([Authenticate::class])->group(function(){
 
    // Frontend guest routes
    Route::get('/live-trending-watch', LiveWatch::class);
    Route::get('/live-watch', LiveWatch::class); 
    Route::get('/super-admin', MediaUploadComponent::class); 
    Route::get('/video-manager', VideoManager::class)->name('video.manager'); 
 });

//  Free Routes
Route::get('/all-sports', Sports::class)->name('sport.all'); 
Route::get('/tv-series', TvSeriesComponent::class)->name('tv.series.all'); 
