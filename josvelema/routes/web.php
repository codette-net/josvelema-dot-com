<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BlogController;
use App\http\Controllers\PageController;


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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/cv', [PageController::class, 'cv'])->name('cv');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/feed.xml', [\App\Http\Controllers\FeedController::class, 'rss'])
    ->name('feed.rss');
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])
    ->name('sitemap');

