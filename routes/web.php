<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CommunityController;
use App\Http\Controllers\Admin\GenresBookController;
use App\Http\Controllers\Admin\AuthorsBookController;
use App\Http\Controllers\ReviewBookController;
use App\Http\Controllers\DiscussBookController;
use App\Http\Controllers\Admin\LanguagesBookController;
use App\Http\Controllers\Admin\PublishersBookController;

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
    return view('welcome');
})->name('home');


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class,'dashboard'])->name('dashboard.admin');

    //AUTHOR
    Route::get('/admin/author',[AuthorsBookController::class,'index'])->name('admin.author');
    //Create Page Author
    Route::get("/admin/create-authors",[AuthorsBookController::class,'createPageAuthors'])->name('page-create.authors');
    Route::post('/admin/create/author',[AuthorsBookController::class,'createAuthors'])->name('create.author');
    //Update page Author
    Route::get('/admin/update-author/{author}',[AuthorsBookController::class,'updatePageAuthors'])->name('page-update.author');
    Route::patch('/admin/update/author/{author}',[AuthorsBookController::class,'updateAuthors'])->name('update.author');
    Route::delete('/admin/delete/author/{author}',[AuthorsBookController::class,'deleteAuthors'])->name('delete.author');

    //GENRE
    Route::get('/admin/genre-publisher-language',[GenresBookController::class,'index'])->name('admin.others');
    Route::get('/admin/create-genre',[GenresBookController::class,'createPageGenre'])->name('page-create.genre');
    Route::post('/admin/create/genre',[GenresBookController::class,'createGenre'])->name('create.genre');
    //Update page Genre
    Route::get('/admin/update-genre/{genre}',[GenresBookController::class,'updatePageGenre'])->name('page-update.genre');
    Route::patch('/admin/update/genre/{genre}',[GenresBookController::class,'updateGenre'])->name('update.genre');
    Route::delete('/admin/delete/genre/{genre}',[GenresBookController::class,'deleteGenre'])->name('delete.genre');

    //LANGUAGE
    Route::get('/admin/language',[LanguagesBookController::class,'index'])->name('admin.language');
    Route::get("/admin/create-language",[LanguagesBookController::class,'createPageLanguage'])->name('page.language');
    Route::post('/admin/create/language',[LanguagesBookController::class,'createLanguageBooks'])->name('create.language');
    //Update page Language
    Route::get('/admin/update-language/{language}',[LanguagesBookController::class,'updatePageLanguages'])->name('page-update.language');
    Route::patch('/admin/update/language/{language}',[LanguagesBookController::class,'updateLanguages'])->name('update.language');
    Route::delete('/admin/delete/language/{language}',[LanguagesBookController::class,'deleteLanguages'])->name('delete.language');

    //PUBLISHER
    Route::get('/admin/publisher',[PublishersBookController::class,'index'])->name('admin.publisher');
    Route::get("/admin/create-publisher",[PublishersBookController::class,'createPagePublisher'])->name('page.publisher');
    Route::post('/admin/create/publisher',[PublishersBookController::class,'createPublisher'])->name('create.publisher');
    //Update page Publisher
    Route::get('/admin/update-publisher/{publisher}',[PublishersBookController::class,'updatePagePublisher'])->name('page-update.publisher');
    Route::patch('/admin/update/publisher/{publisher}',[PublishersBookController::class,'updatePublisher'])->name('update.publisher');
    Route::delete('/admin/delete/publisher/{publisher}',[PublishersBookController::class,'deletePublisher'])->name('delete.publisher');


    //BOOKS
    Route::get('/admin/books',[BookController::class,'index'])->name('admin.books');
    Route::get("/admin/create-books",[BookController::class,'createPageBook'])->name('page-create.books');
    Route::post('/admin/create/books',[BookController::class,'createBooks'])->name('create.books');
    //Update page Boooks
    Route::get('/admin/update-books/{books}',[BookController::class,'updatePageBooks'])->name('page-update.books');
    Route::patch('/admin/update/books/{books}',[BookController::class,'updateBooks'])->name('update.books');
    Route::delete('/admin/delete/books/{books}',[BookController::class,'deleteBooks'])->name('delete.books');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/community',[CommunityController::class,'index'])->name('community.statistik');
});

Route::middleware(['auth', 'is_user'])->group(function () {
    Route::get('/dashboard', [UserController::class,'Dashboard'])->name('dashboard');

    Route::get('/details-book/{bookId}', [ReviewBookController::class,'index'])->name('book.details');

    //Review
    Route::post("/review/books/{bookId}",[ReviewBookController::class,'createReview'])->name('post.book.review');
    Route::delete('/review/books/{reviewId}/{bookId}/{userId}',[ReviewBookController::class,'deleteReview'])->name('delete.book.review');
            //Reply Review
    Route::post("/reply/review/{reviewId}/{bookId}",[ReviewBookController::class,'createReplyReview'])->name('post.book.reply.review');
    Route::delete('/reply/review/books/{replyId}/{userId}/{bookId}',[ReviewBookController::class,'deleteReplyReview'])->name('delete.book.reply.review');

    //Discuss
    Route::get('/community', [DiscussBookController::class,'index'])->name('community');
    Route::get('/community-details/{discussId}', [DiscussBookController::class,'communityDetails'])->name('community.details');
    Route::post('/community/discuss/post',[DiscussBookController::class,'createDiscuss'])->name('post.discuss');
    Route::delete('/community/discuss/post/{userId}/{discussId}',[DiscussBookController::class,'deleteDiscuss'])->name('delete.discuss');
            //Reply Discuss
    Route::post('/community/reply-discuss/post/{discussId}',[DiscussBookController::class,'createReplyDiscuss'])->name('post.reply.discuss');
    Route::delete('/community/discuss/post/{replyDiscussId}/{discussId}/{userId}',[DiscussBookController::class,'deleteReplyDiscuss'])->name('delete.reply.discuss');

    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/all-book', [UserController::class,'Books'])->name('book.all');
    Route::get('/all-book/{genreId}', [UserController::class,'BooksGenre'])->name('book.genre');
    Route::get('/profile-page',[UserController::class,'Profile'])->name('profile.page');
    // Route::get('/community-details', [UserController::class,'DiscussionDetails'])->name('community.details');


    Route::get('/search', [UserController::class, 'Search'])->name('books.search');
});

require __DIR__.'/auth.php';
