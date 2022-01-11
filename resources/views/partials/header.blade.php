<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="{{route('home')}}">صفحه اصلی</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">وبلاگ نمونه</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="بحث">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>بحث</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>

                @if(auth()->check())
                    <a class="btn btn-sm btn-outline-secondary" href="#">خوش آمدید    {{auth()->user()->name}}</a>
                    <a class="btn btn-sm btn-outline-secondary" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">خروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                @endif

                @if(!auth()->check())
                    <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">ورود</a>
                    <a class="btn btn-sm btn-outline-secondary" href="{{route('register')}}">عضویت</a>
                @endif

            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @if(auth()->check())
            <a class="p-2 link-secondary" href="{{route('posts.create')}}">ایجاد پست جدید</a>
            <a class="p-2 link-secondary" href="{{route('posts.index')}}">پست های من</a>
            @endif
            <a class="p-2 link-secondary" href="#">الولايات المتحدة</a>

        </nav>
    </div>
</div>
