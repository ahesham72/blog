@extends('layouts.app')
@section('title')
    Edit
@endsection
@section('content')
    <form method="POST" action="{{ route('update', 2) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                <option value="1">Ahmed</option>
                <option value="2">Mohamed</option>
                <option value="3">Ali</option>
                <option value="4">Kimo</option>

            </select>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
@endsection