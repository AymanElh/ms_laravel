@extends('layouts.app')

@section('title', 'create category')

@section('content')


<h1>Create Category</h1>

<div>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <label for="category">Category Name</label>
        <input type="text" id="category" name="category">
        <button type="submit">Create</button>
    </form>
</div>