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

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">العالم</strong>
                    <h3 class="mb-0">مشاركة مميزة</h3>
                    <div class="mb-1 text-muted">نوفمبر 12</div>
                    <p class="card-text mb-auto">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي.</p>
                    <a href="#" class="stretched-link">أكمل القراءة</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text></svg>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">التصميم</strong>
                    <h3 class="mb-0">عنوان الوظيفة</h3>
                    <div class="mb-1 text-muted">نوفمبر 11</div>
                    <p class="mb-auto">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي.</p>
                    <a href="#" class="stretched-link">أكمل القراءة</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text></svg>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                من Firehose
            </h3>

            @foreach($posts as $post)

            <article class="blog-post">
                <h2 class="blog-post-title">{{$post->title}}  @if(auth()->check()) <a class="btn btn-sm btn-outline-secondary" href="{{route('posts.edit',$post->id)}}">ویرایش</a> @endif</h2>
                <p class="blog-post-meta">{{$post->created_at}} <a href="#"> Mark </a></p>
                <p>{{$post->content}}</p>
                <p><a class="btn btn-sm btn-outline-secondary" href="{{route('posts.show',$post->id)}}">مشاهده پست کامل</a></p>
            </article>

            @endforeach

            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>


            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">تدوينات أقدم</a>
                <a class="btn btn-outline-secondary disabled">تدوينات أحدث</a>
            </nav>

        </div>


    </div>

</main>

@endsection
