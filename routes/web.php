<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use Livewire\Component;
use App\Http\Livewire\LiveWatch;
use App\Http\Livewire\MediaUploadComponent;
use App\Http\Livewire\VideoManager;
use App\Http\Livewire\Sports;
use App\Http\Livewire\TvSeriesComponent;
use App\Http\Livewire\MusicComponent;
use App\Http\Livewire\MovieComponent;
use App\Http\Livewire\News;
use App\Http\Livewire\SearchEngineComponent;
use App\Http\Livewire\CustomerComponent;
use App\Http\Livewire\VideoPlayerComponent;


use App\Http\Controllers\FileUploadController;
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
    Route::get('/live-watch', LiveWatch::class)->name('video.stream'); 
    Route::get('/super-admin', MediaUploadComponent::class); 
    Route::get('/video-manager', VideoManager::class)->name('video.manager'); 

    Route::get('/all-sports', Sports::class)->name('sport.all'); 
    Route::get('/tv-series', TvSeriesComponent::class)->name('tv.series.all'); 
    Route::get('/music', MusicComponent::class)->name('music.all'); 
    Route::get('/movies', MovieComponent::class)->name('movie.all'); 
    Route::get('/magnetic-search', SearchEngineComponent::class)->name('search.search'); 
    Route::get('/news-live', News::class)->name('news.all'); 

    // Administrator
    Route::get('/uploader', MediaUploadComponent::class)->name('upload');
    Route::get('/customers', CustomerComponent::class)->name('customers');
    Route::get('/player/{movie}', VideoPlayerComponent::class)->name('video-player');

    // Controllers
    Route::get('file-upload', [FileUploadController::class, 'index'])->name('files.index');
    Route::post('/upload-large-files', [FileUploadController::class, 'uploadLargeFiles'])->name('files.upload.large');
    Route::post('/save-media-info', [FileUploadController::class, 'store'])->name('files.info');
    
 });

//  Free Routes

