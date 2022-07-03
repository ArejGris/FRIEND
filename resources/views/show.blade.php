<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<tbody>
@foreach ($photos as $photo)
    <tr>
    <td>{{$photo->name}}</td>
   <td><img src="{{asset('./storage/'.$photo->name)}}" alt="logo"  width="50" height="50" style="resize:5px 4px"></td> 
</tr>
@endforeach
</tbody>
</table>

</body>
</html>