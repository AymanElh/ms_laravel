@extends('layouts.app')

@section('title', 'create category')

@section('content')

<h2>Creae Article</h2>

<div>
    <form action="{{route('articles.store')}}" method="POST">
        <div>
            <label for="">Article title</label>
            <input type="text" name="article">
        </div>
        <div>
        <label for="">Select a category</label>
            <select name="categories" id="">
                @foreach($categories as $category)
                    <option value="">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="sbumit">Create</button>
    </form>
</div>