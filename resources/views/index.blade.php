@extends('layouts.app')
@section('title') Index @endsection
@section('content')

        {{-- ******************* start button Create posts --}}

        {{-- ******************* End button Create posts --}}


        {{-- *******************  Start Code Table view All Posts --}}

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By </th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbo->
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post['id']}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>
                            <a href="{{route('show',$post['id'])}}" type="button" class="btn btn-warning">View</a>
                            <a href='{{route('edit',$post['id'])}}' class="btn btn-success">Edit</a>

                            <form style="display: inline" method="POST" action="{{route('destroy', $post->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delet</button>
                             </form>

                        </td>
                    </tr>
                @endforeach

            </tbo->
        </table>
        {{-- *******************  End  Code Table view All Posts --}}

@endsection
