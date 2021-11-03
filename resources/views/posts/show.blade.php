@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary">Go back</a>
<h1>{{ $post->title }}</h1>
<img style="width:50%" src="/storage/cover_images/{{ $post->cover_image }}">
<br><br>
<div>
    {{ $post->body }}
</div>
<hr>
<small>Written on {{ $post->created_at }} by {{ $post->user->name}}</small>
<hr>
@if(!Auth::guest())
@if(AUTH::user()->id == $post->user_id)
<a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
{!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close()!!}
@endif
@endif
@endsection
