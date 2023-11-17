<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Admin\Books;
use Illuminate\Http\Request;
use App\Models\Admin\GenresBook;
use App\Models\Admin\AuthorsBook;
use App\Models\Client\ReviewBooks;
use App\Models\Client\DiscussBooks;
use App\Http\Controllers\Controller;
use App\Models\Client\ReplyReviewBooks;

class UserController extends Controller
{
    public function Welcome(){
        $books = Books::with('reviews')->get();
        $genres = GenresBook::all();
        $discusses = DiscussBooks::all();
        $reviewses = ReviewBooks::all();

        $startDate = Carbon::now()->subWeek();
        $endDate = Carbon::now();

        $booksOfWeek = Books::with([
            'reviews' => function ($query) use ($startDate, $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            },
            'reviews.repliesReviewBooks' => function ($query) use ($startDate, $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }
        ])
        ->whereHas('reviews', function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
        })
        ->get()
        ->each(function ($book) {
            $book->review_count = $book->reviews->count();
            $book->reply_count = $book->reviews->sum(function ($review) {
                return $review->repliesReviewBooks->count();
            });
        });

        $authorsOfWeek = AuthorsBook::with(['books.reviews' => function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
            // Hanya mengambil review yang dibuat dalam jangka waktu tertentu
        }, 'books.reviews.repliesReviewBooks' => function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
            // Hanya mengambil balasan yang dibuat dalam jangka waktu tertentu
        }])->whereHas('books.reviews', function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
            // Hanya mengambil penulis dengan buku yang memiliki review dalam jangka waktu tertentu
        })->get();

        // Menghitung total review dan balasan untuk setiap penulis
        $authorsOfWeek->each(function ($author) {
            $totalReviews = 0;
            $totalReplies = 0;

            foreach ($author->books as $book) {
                $totalReviews += $book->reviews->count();
                $totalReplies += $book->reviews->sum(function ($review) {
                    return optional($review->repliesReviewBooks)->count() ?? 0;
                });
            }

            $author->totalReviews = $totalReviews;
            $author->totalReplies = $totalReplies;
        });

        foreach ($books as $book) {
            $totalReviews = $book->reviews->count();
            $averageRating = $totalReviews > 0 ? $book->reviews->avg('reviewRates') : 0;
            $book->averageRating = $averageRating;
        }
        foreach($discusses as $discuss){
            $totalReplyDiscuss = $discuss->replyDiscuss->count();
            $discuss->totalReply = $totalReplyDiscuss;
        }
        return view('welcome', compact('books','genres','discusses', 'reviewses','booksOfWeek','authorsOfWeek'));
    }

    public function Dashboard(){
        $books = Books::with('reviews')->get();
        $genres = GenresBook::all();
        $discusses = DiscussBooks::all();
        $reviewses = ReviewBooks::all();

        $startDate = Carbon::now()->subWeek();
        $endDate = Carbon::now();

        $booksOfWeek = Books::with([
            'reviews' => function ($query) use ($startDate, $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            },
            'reviews.repliesReviewBooks' => function ($query) use ($startDate, $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }
        ])
        ->whereHas('reviews', function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
        })
        ->get()
        ->each(function ($book) {
            $book->review_count = $book->reviews->count();
            $book->reply_count = $book->reviews->sum(function ($review) {
                return $review->repliesReviewBooks->count();
            });
        });

        $authorsOfWeek = AuthorsBook::with(['books.reviews' => function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
            // Hanya mengambil review yang dibuat dalam jangka waktu tertentu
        }, 'books.reviews.repliesReviewBooks' => function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
            // Hanya mengambil balasan yang dibuat dalam jangka waktu tertentu
        }])->whereHas('books.reviews', function ($query) use ($startDate, $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
            // Hanya mengambil penulis dengan buku yang memiliki review dalam jangka waktu tertentu
        })->get();

        // Menghitung total review dan balasan untuk setiap penulis
        $authorsOfWeek->each(function ($author) {
            $totalReviews = 0;
            $totalReplies = 0;

            foreach ($author->books as $book) {
                $totalReviews += $book->reviews->count();
                $totalReplies += $book->reviews->sum(function ($review) {
                    return optional($review->repliesReviewBooks)->count() ?? 0;
                });
            }

            $author->totalReviews = $totalReviews;
            $author->totalReplies = $totalReplies;
        });

        foreach ($books as $book) {
            $totalReviews = $book->reviews->count();
            $averageRating = $totalReviews > 0 ? $book->reviews->avg('reviewRates') : 0;
            $book->averageRating = $averageRating;
        }
        foreach($discusses as $discuss){
            $totalReplyDiscuss = $discuss->replyDiscuss->count();
            $discuss->totalReply = $totalReplyDiscuss;
        }
        return view('dashboard', compact('books','genres','discusses', 'reviewses','booksOfWeek','authorsOfWeek'));
    }

    public function Books(){
        $genres = GenresBook::all();
        $books = Books::all();
        foreach ($books as $book) {
            $totalReviews = $book->reviews->count();
            $averageRating = $totalReviews > 0 ? $book->reviews->avg('reviewRates') : 0;
            $book->averageRating = $averageRating;
        }
        return view('books-all',compact('genres','books'));
    }

    public function BooksGenre($genreId){
        $genres = GenresBook::all();
        $genresBooks = GenresBook::where('genre_id',$genreId)
        ->orWhere('genreName', $genreId)
        ->with('books.reviews') // Eager load books and their reviews
        ->get();
        foreach ($genresBooks as $genreBook) {
            foreach ($genreBook->books as $book) {
            $totalReviews = $book->reviews->count();
            $averageRating = $totalReviews > 0 ? $book->reviews->avg('reviewRates') : 0;
            $book->averageRating = $averageRating;
            }
        }
        return view('books-genre', compact('genres','genresBooks'));
    }

    public function Profile(){
        return view('profile');
    }

    public function Search(Request $request){
        $query = $request->input('search');
        //nama table lain , table.foreignkey = nama table lain.primary key nya
        $books = Books::leftJoin('books_authors', 'books.bookAuthor', '=', 'books_authors.author_id')
        ->leftJoin('books_genres_config', 'books.book_id', '=', 'books_genres_config.books_id')
        ->leftJoin('books_genres', 'books_genres_config.genres_id', '=', 'books_genres.genre_id')
        ->leftJoin('books_publishers', 'books.bookPublisher', '=', 'books_publishers.publisher_id')
        ->where('books.bookTitle', 'LIKE', "%$query%")
        ->orWhere('books_authors.authorName', 'LIKE', "%$query%")
        // ->orWhere('genres.name', 'LIKE', "%$query%")
        ->orWhere('books_publishers.publisherName', 'LIKE', "%$query%")
        ->orWhere('books_genres.genreName', 'LIKE', "%$query%")
        ->select('books.*')
        ->distinct()
        ->paginate(10);

        return view('search-result',compact('books'));
    }
}
