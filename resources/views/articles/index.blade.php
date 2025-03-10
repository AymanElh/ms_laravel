@extends('layouts.app')

@section('title', 'articles')

@section('content')

<h1>Articles</h1>

<ul>
    @foreach($articles as $article)
        <li>{{ $article->name }}</li>
        <li>{{ $article->cateogry }}</li>
        <hr>
    @endforeach
    <a href="{{route('articles.create')}}">Create Article</a>
</ul>