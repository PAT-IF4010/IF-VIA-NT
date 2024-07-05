@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <h1 class="mb-4">{{ $post->title }}</h1>

                <p>Written by
                    <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->slug }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://picsum.photos/seed/{{ $post->category->slug }}/1200/400"
                        alt="{{ $post->category->slug }}" class="img-fluid">
                @endif

                <article class="my-4 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-4">Back to Blog Post!</a>
            </div>
        </div>
    </div>
@endsection
