@extends('layouts.layout')
@section('pageTitle', 'Blog')
@section('content')
<form action="{{ route('article.store') }}" method="POST" class="flex flex-col rounded-xl bg-slate-800 p-3">
    @csrf
    <label for="title">
        <input type="text" name="title" value="{{ old('title') }}" >
        @error('title')
        <p>{{ $message }}</p>
        @enderror
    </label>
    <label for="slug">
        <input type="text" name="slug" value="{{ old('slug') }}" >
        @error('slug')
        <p>{{ $message }}</p>
        @enderror
    </label>
    <label for="description">
        <input type="text" name="description" value="{{ old('description') }}" >
        @error('description')
        <p>{{ $message }}</p>
        @enderror
    </label>
    <label for="publish" class="">
        <input type="checkbox" name="publish">
        <span>Publish</span>
    </label>
    <button type="submit" class="bg-red-500">Send</button>
</form>
@endsection
