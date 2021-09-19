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
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-outline-success">Show</a>
                            <a href="" class="btn btn-outline-warning">Edit</a>
                            <form action="" class="d-inline-block" method="post">
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