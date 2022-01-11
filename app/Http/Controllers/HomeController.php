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

    public function install(){
        $getUserTable = (new User())->getTable();

        $tables = collect(DB::select('SHOW TABLES'))->map(function ($tables) {
            foreach ($tables as $val) { return $val; }
        })->toArray();

        if (!in_array($getUserTable, $tables)) {
            Artisan::call('key:generate');
            dump(Artisan::output());
            Artisan::call('migrate --seed');
            dump(Artisan::output());
            Artisan::call('storage:link');
            dump(Artisan::output());
        }else{
            dump('error : app installed ..') ;
        }
    }
}
