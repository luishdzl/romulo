<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HerramientaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\CargoController;
use App\Http\Controllers\TiposController;


Route::get('/', function () {
    return view('welcome');
});

// Rutas protegidas por autenticación
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
    });

// Rutas de administración
Route::get('home', [HomeController::class, 'index'])
    ->middleware('can:admin.home')
    ->name('admin.home');

// Rutas de recursos para administración
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])
    ->middleware(['can:admin.users.index', 'can:admin.users.edit', 'can:admin.users.update'])
    ->names('admin.users');

Route::resource('categories', CategoryController::class)
    ->middleware(['can:admin.categories.index', 'can:admin.categories.create', 'can:admin.categories.edit', 'can:admin.categories.destroy'])
    ->names('admin.categories');

Route::resource('tags', TagController::class)
    ->middleware(['can:admin.tags.index', 'can:admin.tags.create', 'can:admin.tags.edit', 'can:admin.tags.destroy'])
    ->names('admin.tags');

Route::resource('herramientas', HerramientaController::class)
    ->middleware(['can:admin.herramientas.index', 'can:admin.herramientas.create', 'can:admin.herramientas.edit', 'can:admin.herramientas.destroy'])
    ->names('admin.herramientas');

Route::resource('inventories', InventoryController::class)
    ->middleware(['can:admin.inventories.index', 'can:admin.inventories.create', 'can:admin.inventories.edit', 'can:admin.inventories.destroy'])
    ->names('admin.inventories');

Route::resource('cargos', CargoController::class)
    ->middleware(['can:admin.cargos.index', 'can:admin.cargos.create', 'can:admin.cargos.edit', 'can:admin.cargos.destroy'])
    ->names('admin.cargos');

// Rutas para los modelos de usuario
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('/post/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts', [PostController::class, 'post'])->name('posts');
Route::get('/tipos', [TiposController::class, 'tipos'])->name('tipos');