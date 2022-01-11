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

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">ایجاد پست جدید</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ action('\App\Http\Controllers\PostController@update') }}" method="POST"
                          role="form">
                        <div class="row">
                            @include('pages.blog.partials.form')
                        </div>
                        <div class="row">
                            <button type="submit" id="create" class="btn btn-addon m-b-sm btn-primary"><i
                                    class="fa fa-plus"></i>ذخیره
                            </button>
                            <a class="btn btn-addon m-b-sm btn-default"
                               href="{{ action('\App\Http\Controllers\PostController@index') }}"><i
                                    class="fa fa-chevron-left"></i>لفو</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

@endsection
