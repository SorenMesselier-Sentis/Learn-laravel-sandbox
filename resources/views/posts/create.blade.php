@extends('layouts.layout')
@section('pageTitle', 'Blog')
@section('content')
<form action="{{ route('article.store') }}" method="POST" class="flex flex-col rounded-xl bg-slate-800 p-8 gap-y-3">
    @csrf
    <h1 class="text-center text-slate-200 text-xl">Creer un nouveau post</h1>
    <label for="title">
        <input type="text" class="rounded" name="title" value="{{ old('title') }}" placeholder="Titre" >
        @error('title')
        <p>{{ $message }}</p>
        @enderror
    </label>
    <label for="slug">
        <input type="text" class="rounded" name="slug" value="{{ old('slug') }}" placeholder="Slug">
        @error('slug')
        <p>{{ $message }}</p>
        @enderror
    </label>
    <label for="description">
        <input type="text" class="rounded" name="description" value="{{ old('description') }}" placeholder="Description">
        @error('description')
        <p>{{ $message }}</p>
        @enderror
    </label>
    <label for="publish" class="">
        <input type="checkbox" name="publish">
        <span>Publish</span>
    </label>
    <button type="submit" class="bg-slate-600 rounded py-2">Send</button>
</form>
@endsection
