@extends('layouts.main')

@section('content')                             
    
<h1>Create New Post</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="category_id">Category ID</label>
        <input type="number" name="category_id" id="category_id" class="form-control" required>
        @error('category_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required maxlength="255">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" id="text" class="form-control" required></textarea>
        @error('text')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Image URL</label>
        <input type="text" name="image" id="image" class="form-control" required>
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="like">Likes</label>
        <input type="number" name="like" id="like" class="form-control" required>
        @error('like')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="dislike">Dislikes</label>
        <input type="number" name="dislike" id="dislike" class="form-control" required>
        @error('dislike')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="view">Views</label>
        <input type="number" name="view" id="view" class="form-control" required>
        @error('view')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
</div>
@endsection