<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

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
