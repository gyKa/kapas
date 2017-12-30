@extends('layout')

@section('content')
    @foreach ($bookmarks as $bookmark)
        <p>
            <a href="{{ $bookmark->url }}">{{ $bookmark->title }}</a>

            <div class="tags">
                @foreach ($bookmark->tags as $tag)
                    <span class="tag is-dark">{{ $tag->title }}</span>
                @endforeach
            </div>
        </p>
    @endforeach
@endsection
