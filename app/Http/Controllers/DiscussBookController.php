<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Client\DiscussBooks;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Client\ReplyDiscussBooks;

class DiscussBookController extends Controller
{
    public function index(){
        $discusses = DiscussBooks::orderByDesc('created_at')->get();
        $usersMostDiscussion = User::where('role', 'user')
        ->withCount('discussBook') // Assuming 'discussBook' is the relationship method in the User model
        ->orderByDesc('discuss_book_count')
        ->get();
         // Retrieve recent discussions
        $discussionsRecent = DiscussBooks::orderByDesc('created_at')->get();
        $discussionsNoReplies = DiscussBooks::has('replyDiscuss', '=', 0)->get();
        return view('forum-discussion-all',compact('discusses','usersMostDiscussion','discussionsRecent','discussionsNoReplies'));
    }

    public function communityDetails($discussId){
        // $discuss = DiscussBooks::where('discuss_id', $discussId)->first();
        $discuss = DiscussBooks::where('discuss_id', $discussId)
        ->orWhere('discussMessage', $discussId)
        ->first();
        $replies = ReplyDiscussBooks::where('replyDiscuss', $discuss->discuss_id)
        ->orWhere('replyDiscuss', $discuss->discussMessage)
        ->get();
        return view('forum-discussion-details',compact('discuss','replies'));
    }

    public function createDiscuss(Request $request){
        $request->validate([
        'discussMessage' => 'required']);

        $data = new DiscussBooks([
            'discussMessage'  => $request->discussMessage,
            'discussUser' => Auth::user()->id
        ]);
        $data->save();
        return redirect()->route('community')->with('succes', 'succes create discuss');
    }

    public function deleteDiscuss($userId, $discussId){
        $discuss = DiscussBooks::where('discuss_id', $discussId)->where('discussUser', $userId)->first();
        if (!$discuss) {
            return redirect()->route('community')->with('error', 'Discussion not found.');
        }
        $discuss->delete();
        return redirect()->route('community')->with('success', 'Discussion deleted successfully.');
    }

    public function createReplyDiscuss(Request $request, $discussId){
        $discuss = DiscussBooks::where('discuss_id', $discussId)->first();
        $request->validate([
            'replyText'=> 'required',
        ]);

        $data = new ReplyDiscussBooks([
            'replyUser'=> Auth::user()->id,
            'replyDiscuss'=> $discuss->discuss_id,
            'replyText'=> $request->replyText,
        ]);
        $data->save();
        return redirect()->route('community.details',$discuss->discussMessage)->with('success', 'Reply Discussion created successfully.');
    }

    public function deleteReplyDiscuss($replyDiscussId, $discussId,$userId){
        $replyDiscuss = ReplyDiscussBooks::where('replyDiscuss_id', $replyDiscussId)->where('replyDiscuss', $discussId)->where('replyUser',$userId)->first();
        $discuss = DiscussBooks::where('discuss_id',$discussId)->first();
        if (!$replyDiscuss) {
            return redirect()->route('community.details')->with('error', 'Discussion not found.');
        }
        $replyDiscuss->delete();
        return redirect()->route('community.details',$discuss->discussMessage)->with('success', 'Reply Discussion deleted successfully.');
    }
}
