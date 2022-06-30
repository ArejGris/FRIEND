<html>
    <section>
        @extends('onepost')
        @section('edit')
    <title>add new comment</title>
    <body>
        
        <form method="POST" action="{{route('comment.update',$comment->id)}}">
            @csrf
            <input type="hidden" name="id" value="{{$comment->id}}" />
             <label for="cbody">write comment</label>{{$comment->body}}
            <input id="cbody" name="cbody" placeholder="{{$comment->body}}" value="{{$comment->body}}"/>
            <button type="submit">UpdateComment</button>
        </form>
        @endsection

      </section>
    </body>
</html>