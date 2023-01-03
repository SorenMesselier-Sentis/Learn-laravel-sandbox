@extends('layouts.layout')
@section('pageTitle', 'Blog')
@section('content')

    <div class="grid grid-cols-12 gap-4">
        @forelse ($posts as $post)
            <div class="col-span-3 border-2 p-4 flex flex-col gap-4">
                <h2>{{$post->title}}</h2>
                <p class="text-gray-500">{{$post->description}}</p>
            </div>
        @empty
            <p>No articles</p>
        @endforelse
    </div>
@endsection
