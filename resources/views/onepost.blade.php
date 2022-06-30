<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link  href="css/style.css" rel="stylesheet">
</head>
<body>
    <section id="content">
    @extends('welcome')
    @section('content')
            @if(Session::has('add_post'))
            <div class="alert alert-success" role="alert">
                {{Session::get('add_post')}}
                @endif
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        
                         <p>{{$post->title}}</p>

                    </div>
                    <div class="card-body">
                         <p>{{$post->body}}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">All comments</div>
                    <div class="card-body">
                        <table>
                            <thead><th>comment</th><th>action</th></thead>
                            <tbody>
                                 @foreach($post->comments as $comment)
                                 <tr><td>>{{$comment->cbody}}</td>
                                 <td>
                                    <a href="/comments/delete/{{$comment->id}}" class="btn btn-success">delete</a>
                                    <a href="/comments/edit/{{$comment->id}}" class="btn btn-success">edit</a>
                                </td></tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        
                </div>
                <section>
                    @yield('edit')
                </section>
                <div class="card">
                    <div class="card-header">add comment</div>
                <div class="card-body">
                    <form method="POST" action="{{route('comment.store',$post->id)}}">
                       @csrf
                      <input type="hidden" name="id" value="{{$post->id}}" />
                      <label for="cbody"></label>
                      <input id="cbody" name="cbody" placeholder="add comment here" />
                     <button type="submit">AddComment</button>
                   </form>
                </div >
                </div>
            </div>
    
     @endsection
    </section>
</body>
</html>