<?php

use App\Http\Controllers\BusinesscompanylistController;
use App\Http\Controllers\CompanyagentlistController;
use App\Http\Controllers\CompanydepartmentlistController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\NccprofileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuotationController;
use App\Models\companydepartmentlist;
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
    return view('dashboard');
});
Route::get('/getAllEmployee', [HRController::class, 'getAllEmployee'])->name('getAllEmployee');
Route::get('/userRegisterForm', [HRController::class, 'index'])->name('userRegisterForm');
Route::post('/registerEmployee', [HRController::class, 'register'])->name('registerEmployee');
Route::get('/edit/{id}', [HRController::class, 'edit'])->name('editEmployee');
Route::post('/updateEmployee/{id}', [HRController::class, 'update'])->name('updateEmployee');

Route::get('/productForm', [ProductController::class, 'index'])->name('productForm');
Route::post('/productRegister', [ProductController::class, 'register'])->name('productRegister');
Route::get('/productlistData', [ProductController::class, 'getAllProducts'])->name('productlist');
Route::get('/productlistPage', function () {
    return view('product.productList');
})->name('productlistPage');

Route::get('/companyRegisterForm', [BusinesscompanylistController::class, 'index'])->name('companyRegisterForm');
Route::post('/companyRegister', [BusinesscompanylistController::class, 'register'])->name('companyRegister');
Route::get('/companylist', [BusinesscompanylistController::class, 'companylist'])->name('companylist');

Route::get("/companydepartmentform", [CompanydepartmentlistController::class , "index"])->name('companydepartmentform');

Route::get('/agentregistrationForm', [CompanyagentlistController::class, 'index'])->name('agentregistrationform');

Route::get('/profile', [NccprofileController::class, 'index'])->name('profile');
Route::post('/profileUpdate', [NccprofileController::class, 'update'])->name('profileUpdate');

Route::get('/quotationForm', [QuotationController::class, 'index'])->name('quotationForm');
Route::get('/quotationSearchbyCasNo', [QuotationController::class, 'SearchbyCasNo'])->name('quotationSearchbyCasNo');
