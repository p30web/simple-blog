<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home',
            [
            'posts' => Post::query()->paginate(5),
            ]
        );
    }
}
