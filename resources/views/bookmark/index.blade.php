@extends('layout')

@section('content')
    @foreach ($bookmarks as $bookmark)
        <p>{{ $bookmark->title }}</p>

        @foreach ($bookmark->tags as $tag)
            <span>{{ $tag->title }}</span>
        @endforeach
    @endforeach
@endsection
