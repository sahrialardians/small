@extends('layouts.contributor')

@push('styles')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
@endpush

@section('content')

<main class="container">
    <h4 class="mb-3">Your Articles</h4>

    <nav class="blog-pagination">
        <a class="btn btn-sm btn-outline-primary" href="{{ route('articles.create') }}">Write Article</a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Newer</a>
    </nav>

    @foreach ($articles as $article)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-info">Quote</span>
                    <span class="badge badge-pill badge-info">Life</span>
                </p>
                <p class="card-text">{{ $article->content }}</p>
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-success">View</a>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-light">Edit</a>
            </div>  
        </div>
    @endforeach
</main>
@endsection