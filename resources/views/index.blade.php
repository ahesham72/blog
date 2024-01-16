<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- ********************* Start Code nav bar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ITI BLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/posts">Home</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    {{--  *****************           End Code Nav Bar --}}

    {{-- *******************  Start Code section view All Posts --}}

    <div class=" container mt-4">

        {{-- ******************* start button Create posts --}}
        <div class="text-end ">
            <button type="button" class="btn btn-success">Create Post</button>
        </div>
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
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['posted_by'] }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>
                            <a href="/posts/{{$post['id']}}" type="button" class="btn btn-warning">View</a>
                            <a href='#' class="btn btn-success">Edit</a>
                            <button type="button" class="btn btn-danger">Delet</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{-- *******************  End  Code Table view All Posts --}}

    </div>
    {{-- *******************  Start Code section view All Posts --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
