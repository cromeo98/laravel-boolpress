@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID Post</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-outline-success mx-1">Show</a>
                            <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-outline-warning mx-1">Edit</a>
                            <form action="" class="d-inline-block mx-1" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>                    
                @endforeach

            </tbody>
          </table>
    </div>
    
@endsection