@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.posts.update', $post->id)}}" method="post">
                @csrf
                @method('PUT')
                <h3 class="my-3">Aggiornamento Post</h3>
                <div class="card-title">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                </div>
                <div class="card-text">
                  <label for="content" class="form-label">Content</label>
                  <textarea name="content" class="form-control" id="content" placeholder="Inserisci il contenuto del post">{{$post->content}}</textarea>
                </div>
                <div class="py-2">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="{{route('admin.posts.index')}}" class="btn btn-warning">Torna indietro</a>
                </div>
            </form>
        </div>
    </div>
@endsection