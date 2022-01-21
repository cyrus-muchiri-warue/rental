<?php

use App\Http\Controllers\BidController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Models\Bid;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return view('client.index');
});

Route::get('/dashboard', function () {
    $user=User::where('id',Auth::user()->id)->first();
    
    if($user->hasRole('client'))
    {
        return view('template.tenant.index');
    }elseif($user->hasRole('landlord')){
        return view('template.landlord.index');
    }else{
        //return redirect('/');
        return view('template.landlord.index');
    }
    
})->middleware(['auth'])->name('dashboard');

Route::get('notification',[BidController::class,'notification'])->name('bids.notifications');

Route::resource('locations', LocationController::class);
Route::resource('category', CategoryController::class);
Route::resource('orders',OrderController::class);
Route::resource('bids',BidController::class);
require __DIR__.'/auth.php';
require __DIR__.'/tenant.php';
require __DIR__.'/landlord.php';




