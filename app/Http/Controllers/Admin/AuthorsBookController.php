<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\AuthorsBook;
use App\Http\Controllers\Controller;

class AuthorsBookController extends Controller
{
    public function index(){
        $author = AuthorsBook::all();
        return view('Admin.screen.products.author',compact('author'));
    }
    public function createPageAuthors(){
        return view('Admin.screen.products.CRUD.create-author');
    }
    public function createAuthors(Request $request){
        $request->validate([
            'authorName' => 'required',
            'authorImage' => 'required',
            'authorDescription' => 'required'
        ]);

        $image = $request->file('authorImage');
        $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('authors_image', $filename);

        $data = new AuthorsBook([
            'authorName' => $request->authorName,
            'authorImage' => $filename,
            'authorDescription'=> $request->authorDescription,
        ]);
        $data->save();
        return redirect()->route('admin.author')->with('succes','created data');
    }
    public function updatePageAuthors($author_id){
        $author = AuthorsBook::where('author_id',$author_id)->first();
        return view('Admin.screen.products.CRUD.update-author',compact('author'));
    }
    public function updateAuthors($author_id, Request $request){
        $data = [
            'authorName' => $request->authorName,
            'authorDescription'=> $request->authorDescription,
        ];

        // Check if an image is present in the request
        if ($request->hasFile('authorImage')) {
            $image = $request->file('authorImage');
            $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('authors_image', $filename);
            $data['authorImage'] = $filename;
        }

        $author = AuthorsBook::where('author_id', $author_id)->first();
        $author->update($data);
        return redirect()->route('admin.author')->with('success', 'Updated data');
    }
    public function deleteAuthors($id){
        AuthorsBook::find($id)->delete();
        return redirect()->route('admin.author')->with('succes','removed data');
    }
}
