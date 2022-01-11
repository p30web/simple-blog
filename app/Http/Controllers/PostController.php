<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.blog.index',[
           'posts' =>   Post::query()->paginate(10),
        ]);
    }

    public function create(){
        $post = new Post();
        return view('pages.blog.create',['post' => $post]);
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:3',
        ]);

        $post = Post::query()->create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author_id' => $request->user()->id,
            'ip' => $request->ip()
        ]);

        self::attachMedia($post);

        if($post){
            return redirect()
                ->action('\App\Http\Controllers\PostController@index')
                ->with('successful','You have successfully upload file.');
        }else{
            return redirect()->back()->with('error','upload failed ...')->withInput();
        }
    }

    public function edit(Post $post){
        return view('pages.blog.create',[
            'post' => $post
        ]);
    }

    static function attachMedia($post,$collection_name = 'post_collection',$disk='public')
    {
        foreach (request()->media ?? [] as $media) {
            $post
                ->addMedia($media)
                ->sanitizingFileName(Media::fileNameSanitizer())
                ->toMediaCollection($collection_name, $disk);
        }
    }


    public function update(Post $post, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:150',
            'content' => 'required|string|min:3|max:500',
            'media.*' => 'sometimes|max:10000|mimetypes:image/png,image/jpeg,audio/mpeg,audio/mp4,audio/ogg,audio/wave,audio/wav,audio/x-wav'
        ],[
            'mimetypes' => 'شما فقط میتوانید تصویر با فرمت png,jpeg و فایل صوتی با پسوند هایی مثل : mp3,ogg,wav آپلود نمایید'
        ]);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect(action('\App\Http\Controllers\Admin\ViolationsController@index'));
    }

    public function show (Post $post){
        return view('pages.blog.show',[
            'post' => $post
        ]);
    }
}
