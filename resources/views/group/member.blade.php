<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   

</head>
<body>
    @extends('welcome')
    @section('content')
    <section>
        <div class="container">
        </div class="row">
            <div class="card">
                <div class="card-header">
                    All users
                
                </div>
                <div class="card-body">
                    <table id="table">
                <thead>
                <tr>
                <th>member</th><th>age</th><th>study</th>
                </tr>
                </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->age}}</td>
                     <td>{{$member->study}}</td>
                <tr>
                @endforeach
                </tbody>
                   
            </table>
                </div>
            </div>
        </div>
    </div>
    </section>

    @endsection
</body>
</html>