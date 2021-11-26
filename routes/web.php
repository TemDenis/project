<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\GraceComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);

Route::get('/about',AboutComponent::class);

Route::get('/services', ServicesComponent::class);

Route::get('/blog', BlogComponent::class);

Route::get('/contact', ContactComponent::class);
Route::get('/gracecomponent', GraceComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

