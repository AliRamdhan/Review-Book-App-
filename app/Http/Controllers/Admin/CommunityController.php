<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(){
        return view('Admin.screen.community-forum.community-statistik');
    }
}
