<!-- resources/views/post/edit.blade.php -->
@extends('layouts.main')

@section('content')
    
<div class="container">
    <h1>Edit Post</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category_id">Category ID</label>
            <input type="number" name="category_id" id="category_id" class="form-control" value="{{ old('category_id', $post->category_id) }}" required>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required maxlength="255">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $post->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="text">Text</label>
            <textarea name="text" id="text" class="form-control" required>{{ old('text', $post->text) }}</textarea>
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ old('image', $post->image) }}" required>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="like">Likes</label>
            <input type="number" name="like" id="like" class="form-control" value="{{ old('like', $post->like) }}" required>
            @error('like')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="dislike">Dislikes</label>
            <input type="number" name="dislike" id="dislike" class="form-control" value="{{ old('dislike', $post->dislike) }}" required>
            @error('dislike')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="view">Views</label>
            <input type="number" name="view" id="view" class="form-control" value="{{ old('view', $post->view) }}" required>
            @error('view')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection

