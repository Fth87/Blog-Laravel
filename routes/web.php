<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Categories;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($slug);           
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load(['author', 'category']);
    return view('posts', ['title' => count($user->posts) . ' Posts by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load(['author', 'category']);
    return view('posts', ['title' => 'Category in: ' . $category->name, 'posts' => $category->posts]);
});
