<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link  href="css/style" rel="stylesheet"/>
</head>
<body>
  <section id="content">
    @extends('welcome')
    @section('content')
    <div class="card-body">
                @if(Session::has('update_post'))
                    <div class="alert alert-success" role="alert">
                      {{Session::get('update_post')}}
                    </div>
                @endif
                <form method="POST" action="{{route('posts.update',$post->id)}}">
                      @csrf 
                      <input type="hidden" name="id" value="{{$post->id}}" />
                    <div class="form-group">
                         <label for="title" style="color:green;font-style:Italic"> Add Post Title</label>
                         <input type="text" name="title" class="form-controller" placeholder="Enter the Post Title" value="{{$post->title}}"/>
                    </div>
                    <div class="form-group">
                         <label for="body" style="color:green;font-style:Italic"> Add Post Body</label>
                         <textarea  name="body" class="form-controller" rows="8" >{{$post->body}}</textarea>
                    </div>
                          <button type="submit" class="btn btn-success">update post</button>
                </form>
    </div>
    @endsection
  </section>
</body>
</html>