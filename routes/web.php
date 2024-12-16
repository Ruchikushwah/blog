<?php

use App\Models\Topic;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

//Route::get('/', function () {
//return view('welcome');
//});


Route::view("/", "home");

Route::get("/view/{post_id}", function ($post_id) {
    return view("singlePost", ['post_id' => $post_id]);
})->name('post.show');


Route::prefix("admin")->group(function () {
    Route::get("/", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");
});
Route::get("/filter/{cat_id}", function ($cat_id) {
    $topic = Topic::find($cat_id);
    return view("filter", ['cat_id' => $cat_id, 'topic' => $topic]);
})->name('filter');


Route::get("/topics", function () {
    return view(('admin.topics'));
})->name('admin.topics');

Route::get("/posts", function () {
    return view(('admin.manage-post'));
})->name('admin.post');

Route::get("/posts/create", function () {
    return view(('admin.insert-post'));
})->name('admin.post.create');

Route::get("/singup", function () {
    return view("register");
})->name('singup');

Route::get("/login", function () {
    return view("login");
})->name('login');




Route::get('auth/google', [loginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/auth_logout', [loginController::class, 'auth_logout'])->name('logout');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('google.callback');
