<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');
Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/posts', [ClientController::class,'getAllPost'])->name('posts.getAllPost');
Route::get('/posts/{id}', [ClientController::class,'getPostById'])->name('posts.getPostByid');
Route::get('/add-post', [ClientController::class,'addPost'])->name('posts.addpost');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.update');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');
Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluents.index');
// Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getallpost');
Route::get('/add-post', [PostController::class, 'addPost'])->name('post.add');
Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('post.submit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');
Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');
Route::get('/edit-post/{id}', [PostController::class, 'editpost'])->name('post.edit');
//update
Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');
Route::get('/inner-join', [PostController::class, 'innerJoinCaluse'])->name('post.innerjoin');
Route::get('/left-join', [PostController::class, 'leftjoinClause'])->name('post.leftjoin');
Route::get('/right-join', [PostController::class, 'rightjjoinClause'])->name('post.rightjoin');

Route::get('/all-post', [PostController::class, 'getAllPostUsingModel'])->name('post.allpost');



