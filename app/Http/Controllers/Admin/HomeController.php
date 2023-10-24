<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\AuthorsBook;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard(){
        $authors = AuthorsBook::all();
        return view('Admin.screen.dashboard',compact('authors'));
    }
}
