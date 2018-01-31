@extends('layouts.app')

@section('title', 'Edit')
@section('content')

<form class="container" action="{{route('blog.update', $blog->id) }}" method="post" role="form">
	{{ csrf_field() }} {{ method_field('put') }}
    <div class="form-group">
      <label for="title">title</label>
      <div class="col-lg-10">
        <input type="text" value="{{ $blog->title }}" class="form-control" id="title" placeholder="title" name="title">
      </div>
    </div>
   
    <div class="form-group">
      <label for="post">Post</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="post" name="post" placeholder="post"> {{$blog->post}} </textarea>

      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
 
@endsection