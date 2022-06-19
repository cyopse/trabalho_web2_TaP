<?php

use App\Http\Controllers\SearchController;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesComponent;
use App\Http\Livewire\Cliente\ClienteDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Prestadore\PrestadoreDashboardComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
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

/* PRIMEIRA ROTA */
// Route::get('/', function () {
//    return view('welcome');
// });

/* PRIMEIRA ROTA DE AUTH */
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

/* ROTA DA HOMEPAGE */
Route::get('/',HomeComponent::class)->name('home');
/* CATEGORIAS */
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');
/* SERVIÇOSPORCATEGORIA */
Route::get('/{category_slug}/services',ServicesByCategoryComponent::class)->name('home.services_by_category');
/* DETALHES SERVIÇOS */
Route::get('/service/{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');
/* BUSCA */
Route::get('/autocomplete',[SearchController::class,'autocomplete'])->name('autocomplete');
Route::post('/search',[SearchController::class,'searchService'])->name('searchService');



/* ROTAS DO ADMIN */
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    /* READ CATEGORIAS */
    Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service_categories');
    /* CREATE CATEGORIAS */
    Route::get('/admin/service-category/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_category');
    /* UPDATE CATEGORIAS */
    Route::get('/admin/services-category/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.edit_service_category');
    /*ROTAS DE SERVIÇOS */
    Route::get('/admin/all-services',AdminServicesComponent::class)->name('admin.all_services');
    Route::get('/admin/{category_slug}/services',AdminServicesByCategoryComponent::class)->name('admin.services_by_category');
    /* CREATE SERVIÇOS */
    Route::get('/admin/service/add',AdminAddServiceComponent::class)->name('admin.add_service');
    /* EDIT SERVIÇOS */
    Route::get('/admin/service/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');
    
});

/* ROTAS DO PRESTADOR */
Route::middleware(['auth:sanctum', 'verified', 'authprestadore'])->group(function() {
    Route::get('/prestadore/dashboard',PrestadoreDashboardComponent::class)->name('prestadore.dashboard');
});

/* ROTAS DO CLIENTE */
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/cliente/dashboard',ClienteDashboardComponent::class)->name('cliente.dashboard');
});
