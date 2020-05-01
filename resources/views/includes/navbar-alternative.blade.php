<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a href="{{ route('index') }}">
        <h5 class="my-0 mr-md-auto font-weight-normal">Small</h5>
    </a>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
    </nav>
    {{-- <a class="btn btn-outline-primary" href="#">Sign up</a> --}}
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
                                    <a class="dropdown-item" href="">Articles</a>
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