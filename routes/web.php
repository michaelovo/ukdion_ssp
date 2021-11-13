<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('campaign')->group(function(){
    Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaign.index');
    Route::post('/create', [CampaignController::class, 'store'])->name('campaign.store');
    Route::get('/view', [CampaignController::class, 'view'])->name('campaign.view');
    Route::get('/edit/{id}', [CampaignController::class, 'edit'])->name('campaign.edit');
    Route::post('/update/{id}', [CampaignController::class, 'edit'])->name('campaign.update');
});
