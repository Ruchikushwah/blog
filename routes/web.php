<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view("/", "home");

Route::get("/view/{post_id}", function($post_id){
    return view("singlePost");

})->name('post.show');


Route::prefix("admin")->group(function(){
    Route::get("/", function(){
        return view("admin.dashboard");
    })->name("admin.dashboard");
});
 Route::get("/filter",function(){
    return view("filter");
 })->name('filter');


 Route::get("/topics", function(){
    return view(('admin.topics'));
 })->name('admin.topics');