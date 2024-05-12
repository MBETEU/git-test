<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\BloodDonorController;
use App\Http\Controllers\Admin\BloodDonorPostController;
use App\Http\Controllers\CentreController;

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

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/causes', [PagesController::class,'causes'])->name('causes');
Route::get('/donate', [PagesController::class,'donate'])->name('donate');
Route::get('/blog', [PagesController::class,'blog'])->name('blog');
Route::get('/gallery', [PagesController::class,'gallery'])->name('gallery');
Route::get('/event', [PagesController::class,'event'])->name('event');
Route::get('/contact', [PagesController::class,'contact'])->name('contact');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/blood-donor',[BloodDonorController::class,'index'])->name('user.donor.index');
    Route::post('/blood-donor-store',[BloodDonorController::class,'store'])->name('user.donor.store');



    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/blood-donate', [BloodDonorPostController::class, 'index'])->name('user.donate.index');
    Route::get('/user/blood-donates', [BloodDonorPostController::class, 'donors'])->name('user.donate.donors');
    Route::get('/user/blood-donate/{id}',[BloodDonorPostController::class, 'show'])->name('user.donate.show');
    Route::get('/user/blood-donate/{id}',[BloodDonorPostController::class, 'show'])->name('user.donate.show');

    Route::get('/user/accept-proposal/{proposal}',[ProposalController::class, 'confirm'])->name('user.confirm.proposal');

    Route::get('/user/conversation',[ConversationController::class, 'index'])->name('user.conversation.index');
    Route::get('/user/conversation-show/{conversation}',[ConversationController::class, 'show'])->name('user.conversation.show');

    Route::post('/user/accept-update/{donate}',[ProposalController::class, 'modify'])->name('user.confirm.modify');
    // Route
});
Route::middleware(['auth','proposal'])->group(function () {
    Route::post('/user/submit/{donate}', [ProposalController::class, 'store'])->name('user.proposals.store');

});

////// routes controller centre ou banque de sang

Route::get('centres',[CentreController::class,'index'])->name('centre.index');
Route::get('centres',[CentreController::class,'index'])->name('centre.index');
Route::get('centres/create',[CentreController::class,'create'])->name('centre.create');
Route::POST('centres/store',[CentreController::class,'store'])->name('centre.store');
Route::put('centres_update/{id}',[CentreController::class,'update'])->name('centre.update');
Route::get('centres_edit/{id}',[CentreController::class,'edit'])->name('centre.edit');
Route::get('centres_delete/{id}',[CentreController::class,'destroy'])->name('centre.destroy');
