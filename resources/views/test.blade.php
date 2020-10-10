<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    {{-- <h1>All Posts</h1>
    @foreach($test as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->body }}</p>
    @endforeach --}}

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-5">
                <div class="card">
                    <div class="card-header">
                        All Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_deleted'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('post_deleted') }}
                        </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Post title</th>
                                <th>Post Body</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($test as $ko)
                            <tr>
                                <td>{{ $ko->title }}</td>
                                <td>{{ $ko->body }}</td>
                                <td>
                                    <a href="/posts/{{ $ko->id }}" class="btn btn-success">View</a>
                                </td>
                                <td>
                                    <a href="delete-post/{{ $ko->id }}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <a href="/edit-post/{{ $ko->id }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>