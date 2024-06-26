<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
      
      .nav-item a{

        position:relative;
        margin-left:25px;  
      }

      .navbar {
            background-color: #2274C9;
            color:black;
    

        }


      .nav-item a::after{
        content:'';
        position:absolute;
        left:0;
        bottom:6px;
        width:100%;
        height:1.5px;
        background:black;
        border-radius:5px;
        transform:scaleX(0);
        transition:transform .5s;
      }


      .nav-item a:hover::after{
        transform:scaleX(1);

      }

    </style>
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Hotel name</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="1star-rooms.php">1 Star Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="3star-rooms.php">3 Star Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="5star-rooms.php">5 Star Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_dashboard.php">User Dashboard</a>
        </li>
      </ul>
      <!--<form class="d-flex" role="search">
        <button class="btn btn-outline-dark shadow-none me-lg-3 me-3" type="submit" ><a class="nav-link" href="login.php"> Login</a></button>
        <button class="btn btn-outline-dark" type="submit"><a class="nav-link" href="registration.php">Register</a></button>
      </form>-->
    </div>
  </div>

</nav> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>