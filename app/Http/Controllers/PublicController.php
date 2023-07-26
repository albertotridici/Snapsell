<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){

        // $announcements = Announcement::take(6)->get()->orderBy('created_at','desc');  
        $announcements = Announcement::orderBy('created_at', 'desc')->take(6)->get();

        return view('home', compact('announcements'));

    }
    public function categoryShow(Category $category){
        return view('categoryShow', compact('category'));
    }

}
