@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-3">Posts</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Category_id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Text</th>
                <th scope="col">Image</th>
                <th scope="col">Likes</th>
                <th scope="col">Dislikes</th>
                <th scope="col">Views</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <th>{{$post->category_id}}</th>
                        <th>{{$post->title}}</th>
                        <th>{{$post->description}}</th>
                        <th>{{$post->text}}</th>
                        <th>{{$post->image}}</th>
                        <th>{{$post->like}}</th>
                        <th>{{$post->dislike}}</th>
                        <th>{{$post->view}}</th>
                        <th>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                             <th><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Update</a></th>                    </tr>
                @endforeach
            </tbody>
          </table>
          {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection