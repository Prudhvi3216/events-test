<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//Events
use App\Http\Livewire\Backend\Events\ViewEvents;
use App\Http\Livewire\Backend\Events\CreateEvent;
use App\Http\Livewire\Backend\Events\EditEvent;

//Genre
use App\Http\Livewire\Backend\Genre\ViewGenre;
use App\Http\Livewire\Backend\Genre\CreateGenre;
use App\Http\Livewire\Backend\Genre\EditGenre;

//Artists
use App\Http\Livewire\Backend\Artists\CreateArtist;
use App\Http\Livewire\Backend\Artists\EditArtist;
use App\Http\Livewire\Backend\Artists\ViewArtists;

//Venues
use App\Http\Livewire\Backend\Venues\CreateVenue;
use App\Http\Livewire\Backend\Venues\EditVenue;
use App\Http\Livewire\Backend\Venues\ViewVenues;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\HomePage;

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

Route::get('/', HomePage::class);

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::group(['prefix' => 'genre'], function () {
        Route::get('view', ViewGenre::class)->name('view-genres');
        Route::get('create', CreateGenre::class)->name('create-genre');
        Route::get('edit/{id}', EditGenre::class)->name('edit-genre');
    });
    Route::group(['prefix' => 'artists'], function () {
        Route::get('view', ViewArtists::class)->name('view-artists');
        Route::get('create', CreateArtist::class)->name('create-artist');
        Route::get('edit/{id}', EditArtist::class)->name('edit-artist');
    });
    Route::group(['prefix' => 'venues'], function () {
        Route::get('view', ViewVenues::class)->name('view-venues');
        Route::get('create', CreateVenue::class)->name('create-venue');
        Route::get('edit/{id}', EditVenue::class)->name('edit-venue');
    });
    Route::group(['prefix' => 'events'], function () {
        Route::get('view', ViewEvents::class)->name('view-events');
        Route::get('create', CreateEvent::class)->name('create-event');
        Route::get('edit/{id}', EditEvent::class)->name('edit-event');
    });
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';