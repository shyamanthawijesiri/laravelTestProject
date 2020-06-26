@extends('layouts.app')
@section('content')
  <h1>Posts</h1>
  @if(count($posts)>0)

  <div class="card">
    <ul class="list-group list-group-flush">
      @foreach($posts as $post)
        <div class="row">
          <div class="col-md-4">
            <img src="/storage/cover_image/{{$post->cover_image}}" style="width:100%" alt="">
          </div>
          <div class="col-md-8">
              <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <small>{{$post->created_at}}</small>

          </div>
        </div>

      @endforeach
    </ul>
  </div>

  @else

  @endif
@endsection
