<?php

namespace App\Http\Controllers;

use App\Models\Admin\Books;
use Illuminate\Http\Request;
use App\Models\Client\ReviewBooks;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Client\ReplyReviewBooks;

class ReviewBookController extends Controller {

    public function index($bookId) {
        // Get the book by its ID or title
        $book = Books::where('book_id', $bookId)
            ->orWhere('bookTitle', $bookId)
            ->first();

        if (!$book) {
            // Handle case when book is not found
            return abort(404);
        }

            // Get reviews for the book and rating
        $reviews = ReviewBooks::where('reviewBook', $book->book_id)->get();
        $averageRating = $reviews->avg('reviewRates');
        $book->averageRating = $averageRating;


            //GENRES RELATED
        // Get the genres associated with the current book
        $bookGenres = $book->genres()->pluck('genre_id');
        // Get the books with the same genres (excluding the current book)
        $relatedBooksByGenre = Books::whereHas('genres', function ($query) use ($bookGenres) {
            $query->whereIn('genre_id', $bookGenres);
        })->where('book_id', '<>', $book->book_id)->get();

            //AUTHOR BOOKS
        // Get books by the same author
        $booksByAuthor = Books::where('bookAuthor', $book->bookAuthor)
            ->where('book_id', '<>', $book->book_id)
            ->get();


        foreach ($reviews as $review) {
            $review->replyReviews = ReplyReviewBooks::where('replysReview', $review->review_id)->get();
        }

        foreach ($relatedBooksByGenre as $bookGenre) {
            $bookGenreReviews = ReviewBooks::where('reviewBook', $bookGenre->book_id)->get();
            $bookGenreAverageRating = $bookGenreReviews->avg('reviewRates');
            $bookGenre->averageRating = $bookGenreAverageRating; // Add the average rating to the book model
        }

        foreach ($booksByAuthor as $authorBook) {
            $authorBookReviews = ReviewBooks::where('reviewBook', $authorBook->book_id)->get();
            $authorBookAverageRating = $authorBookReviews->avg('reviewRates');
            $authorBook->averageRating = $authorBookAverageRating; // Add the average rating to the book model
        }

        return view('books-details', compact('book', 'reviews', 'averageRating', 'relatedBooksByGenre', 'booksByAuthor'));
    }

    public function createReview(Request $request, $bookId) {
        $book = Books::where('book_id', $bookId)->first();

        $request->validate([
            'reviewText' => 'required',
            'reviewRates'=>'integer|min:1|max:5'
        ]);

        $data = new ReviewBooks([
            'reviewUser' => Auth::user()->id,
            'reviewBook' => $book->book_id,
            'reviewText' => $request->reviewText
        ]);

        if ($request->has('reviewRates')) {
            $data->reviewRates = $request->input('reviewRates');
        }

        $data->save();

        return redirect()->route('book.details',['bookId'=>$book->bookTitle])->with('success', 'Successfully added review');
    }


    public function deleteReview($reviewId, $bookId, $userId){
        $data = ReviewBooks::where('review_id',$reviewId)->where('reviewUser',$userId)->where('reviewBook',$bookId)->first();
        if ($data) {
            $data->delete();
        }
        $book = Books::where('book_id', $bookId)->first();
        return redirect()->route('book.details', ['bookId' => $book->bookTitle])
            ->with('success', 'Review was deleted');
    }

    public function createReplyReview(Request $request, $reviewId, $bookId){
        $book = Books::where('book_id', $bookId)->first();
        $request->validate([
            'replysText'=>'required'
        ]);
        $review = ReviewBooks::where('review_id',$reviewId)->first();
        $data = new ReplyReviewBooks([
            'replysUser' => Auth::user()->id,
            'replysReview' => $review->review_id,
            'replysText' => $request->replysText,
        ]);
        $data->save();

        return redirect()->route('book.details',$book->bookTitle)->with('success', 'Successfully added review');
    }

    public function deleteReplyReview($replyId, $userId,$bookId)
    {
        $data = ReplyReviewBooks::where('replys_id', $replyId)
            ->where('replysUser', $userId)
            ->first();
            $book = Books::where('book_id', $bookId)->first();
        if ($data) {
            $data->delete();
            return redirect()->route('book.details', ['bookId' => $book->bookTitle])
                ->with('success', 'Review was deleted');
        } else {
            return redirect()->route('book.details', ['bookId' => $book->bookTitle])
                ->with('success', 'Review was deleted');
        }
    }
}
