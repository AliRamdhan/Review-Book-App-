<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\PublishersBook;

class PublishersBookController extends Controller
{
    public function index(){
        return view('Admin.screen.products.publisher');
    }
    public function createPagePublisher(){
        return view('Admin.screen.products.CRUD.create-publisher');
    }
    public function createPublisher(Request $request){
        $request->validate([
            'publisherName' => 'required',
            'publisherDescription' => 'required',
            'publisherAddress' => 'required'
        ]);
        $data = new PublishersBook([
            'publisherName'  => $request->publisherName,
            'publisherDescription'  => $request->publisherDescription,
            'publisherAddress' => $request->publisherAddress,
        ]);
        $data->save();
        return redirect()->route('admin.others')->with('succes','created succes data');
    }
    public function updatePagePublisher($publisher_id){
        $publisher = PublishersBook::where('publisher_id',$publisher_id)->first();
        return view('Admin.screen.products.CRUD.update-publisher',compact('publisher'));
    }
    public function updatePublisher($publisher_id, Request $request){
        $data = [
            'publisherName'  => $request->publisherName,
            'publisherDescription'  => $request->publisherDescription,
            'publisherAddress' => $request->publisherAddress,
        ];

        $publisher = PublishersBook::where('publisher_id',$publisher_id)->first();
        $publisher->update($data);
        return redirect()->route('admin.others')->with('success', 'Updated data');
    }
    public function deletePublisher($id){
        $publisher = PublishersBook::find($id)->delete();
        return redirect()->route('admin.others')->with('success', 'Updated data');
    }
}
