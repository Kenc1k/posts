@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-3">Categories</h1>

        <a href="#" class="btn btn-primary mb-4">Create</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Ordinal</th>
                <th scope="col">Is_active</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <th>{{$category->name}}</th>
                        <th>{{$category->ordinal}}</th>
                        <th>{{$category->is_active}}</th>
                        <th>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </th>
                        <th><a href="#" class="btn btn-warning">Update</a></th>
                    </tr>
                @endforeach
            </tbody>
          </table>
          {{ $categories->links('pagination::bootstrap-4') }}
    </div>
@endsection