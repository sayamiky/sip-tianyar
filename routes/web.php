<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VillageProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/blogs', function () {
    return view('blog');
});
Route::get('/blogdetails', function () {
    return view('blogdetail');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => '/admin'], function () {
        Route::apiResource('/profiles', VillageProfileController::class)->except('delete','show');
        Route::get('/profile/create', [VillageProfileController::class, 'create'])->name('profiles.create');
        // Route::get('/profiles/{profile}', [VillageProfileController::class, 'village'])->name('profiles.show');
        Route::apiResource('/blog-categories', BlogCategoryController::class);
        Route::apiResource('/blogs', BlogController::class);
        Route::get('/blog/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::apiResource('/destinations', DestinationController::class);
        Route::get('/destination/create', [DestinationController::class, 'create'])->name('destinations.create');
        Route::apiResource('/events', EventController::class);
        Route::get('/event/create', [EventController::class, 'create'])->name('events.create');
    });
});

require __DIR__ . '/auth.php';
