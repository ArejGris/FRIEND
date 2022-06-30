<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>join</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        join us now
                    </div>
                    <div class="card-body">
                        <form action="{{route('members.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                        <label for="name">your name</label>
                        <input id="name" name="name"/>
                    </div>
                        <div class="form-group" >
                            <label for="age">your age</label>
                        <input id="age" name="age"/>
                    </div>
                    <div class="form-group">
                        <label for="study">your study</label>
                        <input id="study" name="study"/>
                    </div>
                    <button type="submit" class="btn success-btn" >submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>