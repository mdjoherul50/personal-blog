<?php
use Illuminate\Support\Facades\Route;




Route::get('/', function(){
    return view('welcome');
});
Route::get('/home',function(){
return view('home.master');
});

Route::group(['middleware'=>'auth', 'prefix'=>'posts'],function(){
    Route::get('/create',[PostController::class,'create'])->name('post.create');

});




