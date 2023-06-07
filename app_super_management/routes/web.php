<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProvidersController;
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

/*Route::get($uri, $callback);*/

Route::get('/', [MainController::class, 'main'])->name('site.index');
Route::get('/about', [AboutController::class, 'about'])->name('site.about');
Route::get('/contact/{pais}/{regiao}', [ContactController::class, 'contact'] )->name('site.contact');
Route::get('/login',[])->name('site.login');

Route::prefix('/app')->group(function (){
    Route::get('/customers',[])->name('app.customers');
    Route::get('/providers',[ProvidersController::class, 'index'])->name('app.providers');
    Route::get('/products',[])->name('app.products');
});

Route::get('/rota1',[])->name('site.rota1');
Route::get('/rota2',[])->name('site.rota2');
Route::redirect('URI', 'URI', 301);
Route::fallback(function (){
    echo 'A rota buscada não existe <a href="'.route('site.index').'"> Clique aqui</a>';
});
