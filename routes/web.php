<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

Route::get('/contacter-nous', function () {
    return view('pages.contact');
})->name('contact.path');

Route::get('/', function () {
    return view('welcome');
})->name('home.path');

Route::get('confirmation/{token}',[userController::class,'confirmAccount'])->name('confirm.account');


Route::middleware('auth')->prefix('mon-compte')->group(function () {
		Route::get('/',[dashboardController::class,'myAccount'])->name('user.account');
		Route::get('/money',[dashboardController::class,'myInvestments'])->name('user.money');
		Route::get('/transactions',[dashboardController::class,'myTransaction'])->name('user.transaction');
		Route::get('/mes-filleules',[dashboardController::class,'myFilleules'])->name('user.filleules.account');
		Route::get('/make-requests/{type}',[dashboardController::class,'makeRequest'])->name('user.requests');
});


Route::middleware('auth')->prefix('admin')->group(function(){

        Route::get('/home',[adminController::class,'index'])->name('admin.home');
        Route::get('/demande',[adminController::class,'Viewdemande'])->name('admin.demande');
        Route::get('/inscription',[adminController::class,'Viewinscription'])->name('admin.inscription');
        Route::get('/transaction/{type}',[adminController::class,'Viewtransaction'])->name('admin.transaction');
        Route::get('/profil/{id}',[adminController::class,'ViewProfil'])->name('admin.userProfil');
        Route::get('/myprofil',[adminController::class,'ViewProfil'])->name('admin.profil');
        Route::get('/confirm/{id}',[adminController::class,'ActionConfirm'])->name('admin.Confirm');
        Route::get('/search',[adminController::class,'ActionSearch'])->name('admin.Search');

});

Route::get('/register/{id}',function(){
     return view('pages.register');
})->name('register.parrainage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
