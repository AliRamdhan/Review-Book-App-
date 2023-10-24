<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Books;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\GenresBook;
use App\Models\Admin\AuthorsBook;
use App\Models\Admin\LanguagesBook;
use App\Http\Controllers\Controller;
use App\Models\Admin\PublishersBook;

class BookController extends Controller
{
    public function index(){
        $book = Books::all();
        return view('Admin.screen.products.book',compact('book'));
    }
    public function createPageBook(){
        $genres = GenresBook::all();
        $author = AuthorsBook::all();
        $language = LanguagesBook::all();
        $publisher = PublishersBook::all();
        return view('Admin.screen.products.CRUD.create-book',compact('genres','author','language','publisher'));
    }
    public function createBooks(Request $request)
    {
        $request->validate([
            'bookTitle' => 'required',
            'bookImage' => 'required',
            'bookSynopsis' => 'required',
            'bookPages' => 'required|integer',
            'bookAuthor' => 'required',
            'bookPublisher' => 'required',
            'bookLanguage' => 'required',
            'bookGenre' => 'required|array',
            'bookLanguage'=>'required|array'
        ]);

        $image = $request->file('bookImage');
        $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('books_image', $filename);

        // Create a new instance of Books
        $book = new Books;

        $book->bookTitle = $request->bookTitle;
        $book->bookImage = $filename;
        $book->bookSynopsis = $request->bookSynopsis;
        $book->bookPages = $request->bookPages;
        $book->bookAuthor = $request->bookAuthor;
        $book->bookPublisher = $request->bookPublisher;
        $book->bookEditor = $request->bookEditor;
        $book->bookReleaseDate = $request->bookReleaseDate;
        $book->bookISBN = $request->bookISBN;
        $book->bookFormat = $request->bookFormat;
        $book->bookFeatures = $request->bookFeatures;
        $book->save();

        // Sync genres

        $book->genres()->sync($request->bookGenre);
        $book->languages()->sync($request->bookLanguage);

        return redirect()->route('admin.books')->with('success', 'Data created successfully');
    }



    public function updatePageBooks($book_id){
        $book = Books::where('bookd_id',$book_id)->first();
        return view('Admin.screen.products.CRUD.update-book');
    }
    public function updateBooks($book_id,Request $request){
        $data =[
            'bookTitle' => $request->bookTitle ,
            'bookImage' => $request->bookImage ,
            'bookSynopsis' => $request->bookSynopsis ,
            'bookAuthor' => $request->bookAuthor ,
            'bookPublisher' => $request->bookPublisher ,
            'bookLanguage' => $request->bookLanguage ,
            'bookEditor' => $request->bookEditor,
            'bookReleaseDate' => $request->bookReleaseDate,
            'bookISBN' => $request->bookISBN,
            'bookFormat' => $request->bookFormat,
            'bookFeatures' => $request->bookFeatures,
        ];

        if ($request->hasFile('bookImage')) {
            $image = $request->file('bookImage');
            $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('book_image', $filename);
            $data['bookImage'] = $filename;
        }
        $book = Books::where('bookd_id',$book_id)->first();
        $book->update($data);

        $book->genres()->sync($request->bookGenre);
        return redirect()->route('admin.books')->with('succes','created data');
    }
    public function deleteBooks($book_id){
        $book = Books::where('bookd_id',$book_id)->first();
        $book->delete();
        return redirect()->route('admin.books')->with('succes','created data');
    }
}
