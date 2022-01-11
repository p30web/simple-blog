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

        <div class="row">
            <div class="col-md-12">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                   پست های وبلاگ من
                </h3>

                @foreach($posts as $post)

                    <article class="blog-post">
                        <h2 class="blog-post-title">{{$post->title}}</h2>
                        <p class="blog-post-meta">{{$post->created_at}} <a href="#"> Mark </a></p>
                        <p>{{$post->content}}</p>
                    </article>

                @endforeach


                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">تدوينات أقدم</a>
                    <a class="btn btn-outline-secondary disabled">تدوينات أحدث</a>
                </nav>

            </div>


        </div>

    </main>

@endsection
