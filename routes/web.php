<?php

use App\Facades\AnitaConfig;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ContactPageController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Generate routes
foreach (AnitaConfig::getMenu() as $albumMenuItem){
    $name = 'album-'.str_replace(' ', '-', $albumMenuItem['title']);
    $url = $albumMenuItem['url'];
    $id =  $albumMenuItem['id'];
   Route::get($url."/{id}", [AlbumController::class, 'show'])->name($name);
}


Route::get('/about', [AboutPageController::class, 'index'])->name('about');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactPageController::class, 'sendEmail'])->name('contact-us');

Route::get('/hervelewis-cms', function (){
    return redirect(Config::get('app.api_base_url'));
});

