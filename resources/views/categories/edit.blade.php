@extends('layouts.app')

@section('title', 'create category')

@section('content')

<h2>Edit Category</h2>

<form method="POST" action="{{ route('cateogies.update', $category)}}">
    @csrf
    @method('PUT')
    <label for="category">Name</label>
    <input type="text" name="category" id="name">
</form>