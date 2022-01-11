@extends('layout.app')
@section('title') Login @endsection
@push('body_class') bg-light @endpush
@section('content')
    <main class="main h-100" role="main">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto my-4">

                    <div class="text-center">
                        <h1 class="h3">Welcome back</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="{{ asset('img/2.jpg') }}" alt="Jane Roe" class="img-fluid rounded-circle" width="132" height="132">
                                </div>
                                <div class="mt-2">
                                    @include('partials.errors')
                                </div>
                                <form method="post" action="{{ action('\App\Http\Controllers\Auth\AuthController@process_login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>ایمیل</label>
                                        <input class="form-control form-control-lg" dir="rtl" type="email" name="email" value="{{old('email')}}" placeholder="ایمیل خود را وارد نمایید." style="text-align: right" >
                                    </div>
                                    <div class="form-group">
                                        <label>پسورد</label>
                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="پسورد خود را وارد نمایید ." autocomplete="off" >
                                    </div>
                                    <div>
                                        <div class="custom-control custom-checkbox align-items-center">
                                            <input id="remember-me" type="checkbox" name="remember_me">
                                            <label for="remember-me">مرا به خاطر بسپار</label>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-outline-primary">ورود</button>
                                        <a href="{{ action('\App\Http\Controllers\Auth\AuthController@show_register_form') }}" class="btn btn-lg btn-primary">عضویت</a>

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
