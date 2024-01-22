<?php

use App\Livewire\ShowPost;
use App\Models\Post;
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
    return view('home.index');
});

Route::get('/post/{slug}', function ($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('home.show-post', compact('post'));
});
