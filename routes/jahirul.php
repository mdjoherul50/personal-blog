<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;



Route::group(['middleware'=>'auth', 'prefix'=>'posts'],function(){
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/', [PostController::class, 'store'])->name('post.store');
    // Route::get('/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('post.destroy');

});


Route::group(['middleware'=>'auth', 'prefix'=>'category'],function(){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/menu', [CategoryController::class, 'menu'])->name('category.menu');
    Route::get('/{id}/post', [CategoryController::class, 'categoryPost'])->name('category.post');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
  

});

Route::get('/',[PostController::class,'home'])->name('home');
Route::get('/{id}', [PostController::class, 'show'])->name('post.show');



