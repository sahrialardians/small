@extends('layouts.profile')

@section('content')
<main class="container">
    <div class="row d-flex justify-content-center">
        <div class="card mt-4">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">{{ Auth::user()->name }}</h5>
                        <p>{{ Auth::user()->profile->bio }}</p>
                    </div>
                    <img src="" class="ml-3">
                </div>
            </div>
        </div>
    </div><!-- /.row -->
</main>
@endsection