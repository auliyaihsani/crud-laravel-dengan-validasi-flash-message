@extends('layouts.app')

@section('title', 'index')
@section('content')

@foreach($blog as $blog)

<div class="container">
<div class="list-group">
  <p class="list-group-item active">
    {{$blog->title}}
  </p>
  <p  class="list-group-item">{{$blog->post}}
 

  <form action="{{route('blog.edit', $blog->id)}}" method="get">
  	<input type="submit" name="edit" value="edit" class="btn btn-info">
  </form>

  <form action="{{route('blog.destroy', $blog->id) }}" method="post">
  	{{ csrf_field() }} {{ method_field('delete') }}
  	<input type="submit" value="delete" name="delete" class="btn btn-danger">
 </form>

 </div>
</div>
@endforeach
@endsection