<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link  href="css/style" rel="stylesheet"/>
</head>
<body>
    <section id="content">
      @extends('welcome')  
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="width: 100%">
             <a type="button" href="posts/create" class="btn btn-success" style="margin-right:10rem">add post</a><span>All posts</span>
             </div>
                    </div>
                    <div class="card-body">
            <table id="table">
                <thead>
                <tr>
                <th>title</th><th>body</th><th>action</th>
                </tr>
                </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="/edit/{{$post->id}}" type="=button" class="btn btn-success">edit</a>
                        <a href="posts/show/{{$post->id}}" type="=button" class="btn btn-success">show</a>
                        <a href="/posts/{{$post->id}}/comments" type="=button" class="btn btn-success">comment</a>
                    </td>
                <tr>
                @endforeach
                </tbody>
                   
            </table>
                    </div>
                </div>

            </div>
        </div>
        @endsection
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
