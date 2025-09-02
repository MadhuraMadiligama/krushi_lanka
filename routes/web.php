<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinceController; // <--- මේ line එක අත්‍යවශ්‍යයි
use App\Http\Controllers\Admin\CropController;

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

// Default Welcome Route from Breeze
Route::get('/', function () {
    return view('welcome');
});

// Our Province Routes
Route::get('/provinces', [ProvinceController::class, 'index'])->name('provinces.index');
Route::get('/provinces/{province}', [ProvinceController::class, 'show'])->name('provinces.show');


// Breeze Authentication Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes - Protected by 'auth' and 'admin' middleware
Route::middleware(['auth', 'admin'])->group(function () {

    // Admin Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // අපි මේ view එක දැන් හදනවා
    })->name('admin.dashboard');

    // You can add more admin-only routes here in the future
    // Route::get('/admin/users', [UserController::class, 'index']);
    // Route::get('/admin/crops/create', [CropController::class, 'create']);
    Route::resource('/admin/crops', CropController::class);
});


require __DIR__ . '/auth.php';
