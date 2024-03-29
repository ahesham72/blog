@extends('layouts.app')
@section('title')
    create
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{old('title')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{old('description')}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Creator</label>



            <select name="post_creator" class="form-control">
                {{-- <option value="1">Ahmed</option>
                <option value="2">Mohamed</option>
                <option value="3">Ali</option>
                <option value="4">Kimo</option> --}}

                @foreach($users as $user){

                    <option value="{{$user->id}}">{{$user->name}}</option>

                }
                @endforeach

            </select>

        </div>

        <button class="btn btn-success">Submit</button>
    </form>
@endsection
