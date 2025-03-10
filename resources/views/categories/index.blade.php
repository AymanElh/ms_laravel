@extends('layouts.app')

@section('title', 'Categories')

@section('content')


<div>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('categories.create') }}">Add Cateogry</a>
</div>