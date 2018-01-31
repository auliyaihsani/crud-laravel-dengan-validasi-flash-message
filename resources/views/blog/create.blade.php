@extends('layouts.app')

@section('title', 'create')
@section('content')

<form class="container" action="{{route('blog.store') }}" method="post" role="form">
	{{ csrf_field() }}
    <div class="form-group">
      <label for="title">title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="title" placeholder="title" name="title">
      </div>
    </div>
   
    <div class="form-group">
      <label for="post">Post</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="post" name="post" placeholder="post"></textarea>

      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
 
@endsection