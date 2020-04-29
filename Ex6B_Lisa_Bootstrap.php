<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- My Style Sheet --> 
        <link href="stylesA.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <!--This is where the page is wide enough to have the three keys-->
        <li><a href="#">WHO</a></li>
        <li><a href="#">INTRO</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="images/Lisa.png" class="img-responsive img-rounded" style="display:inline" alt="Lisa's photograph" width="250" height="250">
  <!--image responsive means it responds to the screen size, img rounded means that the edges are rounded-->
  <!--Use of inline style with bootstrap--> 
  <h3>I'm a saxophone enthusiast</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Brief Introduction</h3>
  <p>Hello! My name is Lisa Marie Simpson. I am 8 years old. I am the middle child and 
                most intelligent of the Simpson family.</p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center"> 
    <!--container-fluid is a full width container spanning the entire width of the viewpoint-->
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-4"> 
      <p>I go to Springfield Elementary School. The principal is called Principal Skinner.</p>
      <img src="images/school.jpg" class="img-responsive margin" width="100%" alt="School Image">
    </div>
    <div class="col-sm-4">
      <p>Springfield Library is one of my favourite places. It has books about all of my favourite things.</p>
      <img src="images/library.jpg" class="img-responsive margin" width="100%" alt="Library Image">
    </div>
     <div class="col-sm-4"> 
      <p>This is my house. I hang out here a lot. We have a treehouse in the back garden.</p>
      <img src="images/house.jpg" class="img-responsive margin" width="100%" alt="House Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>&copy; 2017 Created for Get Into Tech for Sky <a href="http://www.sky.com">www.sky.com</a></p> 
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

