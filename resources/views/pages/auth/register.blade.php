@extends('layout.app')
@section('title') register @endsection
@push('body_class') bg-light @endpush
@section('content')
    <main class="main h-100" role="main">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto my-4">

                    <div class="text-center">
                        <h1 class="h3">Get started</h1>
                        <p class="lead">
                            Start creating the best possible user experience for you customers.
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                @include('partials.errors')
                            </div>
                            <div class="m-sm-4">
                                <form action="{{ action('\App\Http\Controllers\Auth\AuthController@process_register') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">نام و نام خانوادگی</label>
                                        <input @if($errors->has('name'))  style="border:2px solid red" @endif id="name" class="form-control form-control-lg" type="text" name="name" placeholder="نام و نام خانوادگی خود را وارد نمایید" value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">ایمیل</label>
                                        <input @if($errors->has('email'))  style="border:2px solid red" @endif id="email" class="form-control form-control-lg" type="email" name="email" value="{{old('email')}}" placeholder="ایمیل خود را وارد نمایید" style="text-align:right">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">پسورد</label>
                                        <input @if($errors->has('password'))  style="border:2px solid red" @endif class="form-control form-control-lg" type="password" id="password" name="password" value="{{old('password')}}" placeholder="پسورد مورد نظر خود را وارد نمایید">
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-outline-primary">عضویت</button>
                                        <a href="{{ action('\App\Http\Controllers\Auth\AuthController@show_login_form') }}" class="btn btn-lg btn-primary">عضو سایت هستید ؟ / وارد شوید</a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div>
    </main>
@endsection
© 2022 GitHub, Inc.
Terms
