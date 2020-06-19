@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <a href="/posts/create" class="btn btn-primary">Create</a>
                  <h1>Your Blog Posts</h1>
                  @if( count($posts) >0)
                    <table class="table table-striped">
                      <tr>
                        <th>Title</th>
                        <th></th>
                      <th></th>
                      </tr>
                      @foreach ($posts as $post)

                        <tr>
                          <th>{{$post->title}}</th>
                          <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                          <th></th>
                        </tr>
                      @endforeach
                    </table>
                  @else
                    <p>Your have no posts</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
