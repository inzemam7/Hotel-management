<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       html {
            background-color: #E9F1F7;
        }
      .navbar1 {
            background-color: #2274C9;
        }
        a {
            padding: .3rem;
            border-radius: 2rem;
            color: #e7dfc6;
            text-decoration: none;
            margin: 20px 10px 0 20px;
        }

        a:hover {
            background-color: #E9F1F7;
            color: #816C61;
        }

        .footer {
            background-color: #2274C9;
            padding: 1rem;
            border-radius: 0rem;

        }

    </style>
</head>
</body>
<nav class="navbar navbar-expand-lg navbar-dark navbar1">
  <div class="container-fluid">
  <h3>[insert hotel name]</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="" href="adminlogin.php  ">admin Login</a>
        </li>
        <li class="nav-item">
          <a class="" href="userlogin.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="" href="booking.php">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="" href="#about">About Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit" style="padding: 0.5rem; border-radius: 2rem; background-color: #E9F1F7;">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>