<header class="blog-header py-3 mb-5">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="{{ url('/') }}">Small</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            @guest
                <form action="" method="POST">
                    @csrf
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mx-3" focusable="false" role="img">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                        </svg>
                    </a>
                    <a class="text-muted mr-3" href="{{ route('login') }}">Sign in</a>
                    <a class="btn btn-md btn-success px-4" href="{{ route('register') }}">Write Story</a>
                </form>
            @endguest

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    {{-- <button class="text-muted mr-3" type="submit">Sign out</button> --}}
                    <div class="media">
                        {{-- <img src="" class="mr-3" alt="..."> --}}
                        <div class="media-body">
                            <div class="dropdown">
                                <a href="" class="text-muted dropdown-toggle" id="menus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="menus">
                                    <a class="dropdown-item" href="#">New Post</a>
                                    <a class="dropdown-item" href="#">Posts</a>
                                    <a class="dropdown-item" href="{{ route('articles.index') }}">Articles</a>
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a>
                                    <a class="dropdown-item" href="#">Setting</a>
                                    <button class="dropdown-item btn btn-md btn-secondary" type="submit">Sign out</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endauth
        </div>
    </div>
</header>