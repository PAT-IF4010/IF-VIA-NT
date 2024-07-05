@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success">
                    <i class="bi bi-arrow-left-square"></i>
                    Back to my all posts
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline"
                    onclick="return confirm('Are you sure?')">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                </form>
                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->slug }}"
                            class="img-fluid mt-4">
                    </div>
                @else
                    <img src="https://picsum.photos/seed/{{ $post->category->slug }}/1200/400"
                        alt="{{ $post->category->slug }}" class="img-fluid mt-4">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
