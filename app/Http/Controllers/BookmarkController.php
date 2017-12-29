<?php

namespace App\Http\Controllers;

class BookmarkController extends Controller
{
    public function index()
    {
        return view('bookmark.index', ['bookmarks' => \App\Bookmark::all()]);
    }
}
