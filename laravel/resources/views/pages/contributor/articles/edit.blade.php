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
    <h4 class="mb-3">Share your a stories</h4>

    <nav class="blog-pagination">
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('articles.index') }}">Back Articles</a>
    </nav>

    <div class="card mb-3">
        <div class="card-body">
            <form action="{{ route('articles.update', $item->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $item->title }} id="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control content" name="content" value="{{ $item->content }} id="content" rows="10" placeholder="Tell your story"></textarea>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Tags</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div> --}}
                <button type="submit" class="btn btn-primary">Update Article</button>
            </form>
        </div>  
    </div>
</main>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.2/tinymce.min.js"></script>  
    <script>
        tinymce.init({
            selector: 'textarea.content',
            height: 350,
        })    
    </script>  
@endpush