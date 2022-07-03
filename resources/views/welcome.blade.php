<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym</title>
    <link  href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    

</head>
<body id="home">
    <nav id="navbar" class="bg-dark">
    <div class="logo">
    <a href="#home"><img src="./images/location.png" alt="logo" style="resize:5px 4px"></a>
    </div>
       <ul id="headul">
         <li><a href="posts">Home</a></li>
         <li><a href="/show">About</a></li>
         <li><a href="#program">Program</a></li>
         <li><a href="#trainer">Trainer</a></li>
         <li><a href="#contact">Contact</a></li>
       </ul>
    </nav>
    <!--showcase-->
    <section id="showcase" class="text-center">
      <div class="showcase-content">
      <h1 class="l-heading py-1">welcome in the chat blog<br> <span class="text-primary">FRIEND CLUB</span></h1>
      <a href="/members/create" class="btn btn-primary">Become A Member</a>
      </div>
    </section>
    
      @yield('content')
    
    <div class="footer">
       <div >
        this is all about this project
       </div>
    </div>
   
    
    <script src="https://kit.fontawesome.com/b35f772217.js" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
</body>
</html>
