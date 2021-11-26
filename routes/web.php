<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SellerCategoriesComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminManageCategoryComponent;
use App\Http\Livewire\Seller\SellerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',HomeComponent::class)->name('home');


Route::get('/seller-categories',SellerCategoriesComponent::class)->name('home.seller_categories');

Route::middleware(['auth:santum', 'verified'])->group(function(){
	Route::get('/seller/dashboard', SellerDashboardComponent::class)->name('seller.dashboard');

});


Route::middleware(['authadmin'])->group(function(){
	Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
	Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.add_category');
	Route::get('/admin/manage-category', AdminManageCategoryComponent::class)->name('admin.manage_category');


});

Route::middleware(['authsprovider'])->group(function(){
	Route::get('/sprovider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');

});

