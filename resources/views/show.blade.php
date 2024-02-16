@extends('layouts.app')
@section('title') Show @endsection
@section('content')
{{-- ******************* start button Create posts --}}

        {{-- ******************* End button Create posts --}}

<div class="card mt-3">
  <h5 class="card-header">Post Info</h5>
  <div class="card-body">
    <h5 class="card-title"> Title: {{$post['title']}}</h5>
    <p class="card-text">Description{{$post['Description']}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card mt-5">
    <h5 class="card-header">Post Creator Info</h5>
    <div class="card-body">
      <h5 class="card-title">Name : {{$post['posted_by']}}</h5>
      <p class="card-text">Created At : {{$post['created_at']}}</p>
    </div>
  </div>

@endsection
