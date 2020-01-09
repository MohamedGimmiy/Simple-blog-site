@extends('layouts')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="  col-md-8">
            @foreach ($posts as $post)
                <div class="card mb-3 mt-4">
                    <img src="http://placehold.it/600x300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <p>
                            <a href="{{ url('editpost/' . $post->id ) }}">Edit</a>
                        </p>
                    </div>
                </div>
            @endforeach
            {{ $posts->links() }}
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  Card Title
                </div>
                <div class="card-body">
                 Card body
                </div>
              </div>
        </div>
       
    </div>
</div>

@endsection