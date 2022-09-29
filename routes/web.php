<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Str;

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

// Home page view
Route::get('/', function () {
    $articles = DB::table('tech_articles')->latest('id')->limit(5)->get();
    return view('home', ['articles'=>$articles]);
    });

// Admin page view - protected by loggin and session middleware
Route::get('admin', [adminController::class, 'index'])->middleware('isLogged');

// Calls the add function in the admin controller to add new article DB
Route::post('add', [adminController::class, 'add']);

// View article page based on id, this is used to show individual articles on page
Route::get('/article/{id}', [adminController::class, 'article']);

// Calls delete function based on id in the admin page
Route::get('/delete/{id}', [adminController::class, 'delete']);

// Calls allows admin to edit articles from the admin page
Route::get('/edit/{id}', [adminController::class, 'edit']);
Route::post('update',[adminController::class, 'update'])->name('update');

// Call allows user with author access to add new articles. This page is protected by middlware controller.
Route::get('author', [adminController::class, 'author'])->middleware('isAuthor');
// Call allows admin to access author page This page is protected by middlware controller.
Route::get('author-admin', [adminController::class, 'author'])->middleware('isLogged');

// Views page of all articles that are in the same category
Route::get('/category/{slug}', [adminController::class, 'category']);

// View page of all articles with the same tag
Route::get('/tag/{tags}', [adminController::class, 'tags']);

// Displays a differnt html based on entered url
Route::get('/legal/{subsection}', function($subsection){
        return view ('legal', ['subsection'=>$subsection]);
        }) ->where ('subsection', '(tos|privacy)');

// Calls login pages functions and checks if user is loggin with session through middleware controller
Route::get('admin-login', [UserAuthController::class, 'AdminLogin'])->middleware('AlreadyLoggedIn');
Route::get('author-login', [UserAuthController::class, 'AuthorLogin'])->middleware('AlreadyLoggedIn');

// Calls register pages functions and checks if user is loggin with session through middleware controller
Route::get('register-admin', [UserAuthController::class, 'registerAdmin'])->middleware('AlreadyLoggedIn');
Route::get('register-author', [UserAuthController::class, 'registerAuthor'])->middleware('AlreadyLoggedIn');

// Calls function to create new Admin and Author accounts
Route::post('create', [UserAuthController::class, 'createAdmin'])->name('auth.create');
Route::post('create', [UserAuthController::class, 'createAuthor'])->name('auth.create-author');

// Calls functions that varify credintials when users login
Route::post('check', [UserAuthController::class, 'checkAdmin'])->name('auth.check');
Route::post('check-author', [UserAuthController::class, 'checkAuthor'])->name('auth.check-author');

// Calls function that logsout users by "Pulling" session
Route::get('logout', [UserAuthController::class, 'logout']);

// Calls functions to search for articles based on id, category and tag
Route::get('search',[adminController::class, 'search']);
Route::post('searchResult', [adminController::class, 'searchResult'])->name('search-result');

// Views all articles the are hardware reviews
Route::get('hard-reviews', function() {
    $hardReviews = DB::table('tech_articles')
        ->where('cat_slug', 'hardware-reviews')->get();
        return view('hardware', ['hardReviews'=>$hardReviews]);
    });

// Views all articles the are Tech news
Route::get('tech-news', function () {
    $techNews = DB::table('tech_articles')
        ->where('cat_slug', 'tech-news')->get();
        return view('tech-news', ['techNews'=>$techNews]);
    });

// Views all articles the are software reviews
Route::get('soft-reviews', function () {
    $softReviews = DB::table('tech_articles')
        ->where('cat_slug', 'software-reviews')->get();
        return view('softreviews', ['softReviews'=>$softReviews]);
    });

// Views all articles the are opinion pieces
Route::get('opinion-articles', function (){
    $opinions = DB::table('tech_articles')
                ->where('cat_slug', 'opinion-pieces')->get();
    return view('opinion', ['opinions'=> $opinions]);
    });





