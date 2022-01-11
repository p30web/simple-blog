@extends('layout.app')
@include('partials.header')
@section('content')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">به وبلاگ نمونه ما خوش آمدید</h1>
                <p class="lead my-3">این یک پروژه تست هست که با سرعت توسط علیرضا احمدی آماده شده است . لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، </p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">توضیحات بیشتر</a></p>
            </div>
        </div>
        <article class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}  @if(auth()->check()) <a class="btn btn-sm btn-outline-secondary" href="{{route('posts.edit',$post->id)}}">ویرایش</a> @endif</h2>
            <p class="blog-post-meta">{{$post->created_at}} <a href="#"> Mark </a></p>
            <p>{{$post->content}}</p>
        </article>

        <div class="attach" style="margin-bottom: 11px;">
            @include('partials.media-gallery', ['media' => $post->getMedia('post_collection')])
        </div>
    </main>
@endsection
