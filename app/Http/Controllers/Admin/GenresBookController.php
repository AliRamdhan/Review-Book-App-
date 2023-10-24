<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\GenresBook;
use App\Models\Admin\LanguagesBook;
use App\Http\Controllers\Controller;
use App\Models\Admin\PublishersBook;

class GenresBookController extends Controller
{
    public function index(){
        $genre = GenresBook::all();
        $language = LanguagesBook::all();
        $publisher = PublishersBook::all();
        return view('Admin.screen.products.others',compact('genre','language','publisher'));
    }
    public function createPageGenre(){
        return view('Admin.screen.products.CRUD.create-genre');
    }
    // public function createGenre(Request $request){
    //     $request->validate([
    //         'genreName'  => 'required' ,
    //         'genreImage'=>'required',
    //         'genreDescription' => 'required' ,
    //     ]);

    //     if ($request->hasFile('genreImage')) {
    //         $image = $request->file('genreImage');
    //         $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
    //         $image->storeAs('genre_image', $filename);
    //     }

    //     $data = new GenresBook([
    //         'genreName' => $request->genreName,
    //         'genreImage' => $filename,
    //         'genreDescription' => $request->genreDescription,
    //     ]);
    //     $data->save();
    //     return redirect()->route('admin.others')->with('succes','created data');
    // }
    public function createGenre(Request $request){
        $request->validate([
            'genreName' => 'required',
            'genreImage' => 'required',
            'genreDescription' => 'required'
        ]);

        $image = $request->file('genreImage');
        $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('genre_Image', $filename);

        $data = new GenresBook([
            'genreName' => $request->genreName,
            'genreImage' => $filename,
            'genreDescription'=> $request->genreDescription,
        ]);
        $data->save();
        return redirect()->route('admin.others')->with('succes','created data');
    }
    public function updatePageGenre($genre_id){
        $genre = GenresBook::where('genre_id',$genre_id)->first();
        return view('Admin.screen.products.CRUD.update-genre',compact('genre'));
    }
    public function updateGenre($genre_id, Request $request){
        $data = [
            'genreName' => $request->genreName,
            'genreDescription'=> $request->genreDescription,
        ];


        // Check if an image is present in the request
        if ($request->hasFile('genreImage')) {
            $image = $request->file('genreImage');
            $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('genre_image', $filename);
            $data['genreImage'] = $filename;
        }

        $genre = GenresBook::where('genre_id',$genre_id)->first();
        $genre->update($data);
        return redirect()->route('admin.others')->with('success', 'Updated data');
    }
    public function deleteGenre($id){
        GenresBook::find($id)->delete();
        return redirect()->route('admin.others')->with('succes','removed data');
    }
}
