<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//importamos los controladores
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Income_detailController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\Sale_detailController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//Rutas de nuestra app
route::resource('/dashboard/article',ArticleController::Class);
route::resource('/dashboard/category',CategoryController::Class);
route::resource('/dashboard/income_details',Income_detailController::Class);
route::resource('/dashboard/income',IncomeController::Class);
route::resource('/dashboard/person',PersonController::Class);
route::resource('/dashboard/sales_details',Sale_DetailController::Class);
route::resource('/dashboard/Sale',SaleController::Class);
route::resource('/dashboard/role',RoleController::Class);
route::resource('/dashboard/usuario',UsuarioController::Class);
});



require __DIR__.'/auth.php';
