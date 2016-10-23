<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function getIndex(){

        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequest();
        return view('friends.index')->with('friends',$friends)->with('requests',$requests);
    }
}
