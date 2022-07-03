<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="com-md-12">
       <div class="card">
           <div class="card-header">upload file
           </div>
           <div class="card-body">
           <form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
           @csrf
           <label for="photo">photo</label>
            <input type="file" required name="photo" id="photo"/>
            <button type="submit">send</button>
            </form>
        
           
           </div>
       </div>
    
    </div>
    </div>
    </div>
</body>
</html>