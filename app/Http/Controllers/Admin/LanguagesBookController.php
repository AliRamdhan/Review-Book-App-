<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\LanguagesBook;
use App\Http\Controllers\Controller;

class LanguagesBookController extends Controller
{
    public function index(){
        return view('Admin.screen.products.language');
    }
    public function createPageLanguage(){
        return view('Admin.screen.products.CRUD.create-language');
    }
    public function createLanguageBooks(Request $request){
        $request->validate([
            'languageName' => 'required'
        ]);
        $data = new LanguagesBook([
            'languageName' => $request->languageName
        ]);
        $data->save();
        return redirect()->route('admin.others')->with('succes','created data');
    }
    public function updatePageLanguages($language_id){
        $language = LanguagesBook::where('language_id',$language_id)->first();
        return view('Admin.screen.products.CRUD.update-language',compact('language'));
    }
    public function updateLanguages($language_id, Request $request){
        $data = [ 'languageName' => $request->languageName ];
        $language = LanguagesBook::where('language_id',$language_id)->first();
        $language->update($data);
        return redirect()->route('admin.others')->with('success', 'Updated data');
    }
    public function deleteLanguages($id){
        $language = LanguagesBook::find($id)->delete();
        return redirect()->route('admin.others')->with('success', 'Removed data');
    }
}
