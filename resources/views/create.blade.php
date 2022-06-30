<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link  href="css/style" rel="stylesheet"/>
  </head>
<body>
  <section id="content">
    @extends('welcome')
    @section('content')
      <form method="POST" action="{{route('posts.store')}}">
        @csrf
                    <div class="form-group">
                         <label for="title" style="color:green;font-style:Italic"> Add Post Title</label>
                         <input type="text" name="title" class="form-controller" placeholder="Enter the Post Title" />
                    </div>
                    <div class="form-group">
                         <label for="body" style="color:green;font-style:Italic"> Add Post Body</label>
                         <textarea  name="body" class="form-controller" rows="8" ></textarea>
                    </div>
                          <button type="submit" class="btn btn-success">Add post</button>
        </form>
        @endsection
  </section>
</body>
</html>