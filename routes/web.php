<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about13', ['title' => 'Halaman About']);
});

Route::get('/profile', function () {
    return view('about13', ['title' => 'Profile Page']);
});

Route::get('/report', function () {
    return view('about13', ['title' => 'blog']);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{slug}', function ($slug) {

    $allPosts = Post::all();

    $post = Arr::first($allPosts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) {
        abort(404);
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});