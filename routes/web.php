<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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

Route::get('/', [ArticleController::class, 'showArticles']);
Route::get('/blog/{id}', [ArticleController::class, 'showArticle']);
Route::get('/updateArticle/{id}', [ArticleController::class, 'showUpdateArticle'])->middleware('auth');
Route::post('/updateArticle', [ArticleController::class, 'updateArticle'])->middleware('auth');
Route::get('/delete/{id}', [ArticleController::class, 'deleteArticle'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/addArticle', function (Request $request){
   $article = new \App\Models\Article();
   $article->title = $request->title;
   $article->content = $request->contentField;
   $article->author_id = auth()->user()->getAuthIdentifier();
   $article->save();
   return redirect()->intended('/');
});
require __DIR__.'/auth.php';
