<?php 
 require('extra.php');

 
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      #dash{
        position:fixed;
        height:100%;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0">ABODE BOOKINGS</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dash">
      <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid flex-lg-column align-items-stretch mt-2" style=" border-radius: 1rem;">
          <h4 class="mt-2 text-light">ADMIN PANEL</h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#admindropdown"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="admin_dashboard.php">Dashboard</a>
            </li>
            <li>
              <a class="nav-link text-white" href="rooms.php">Rooms</a>
            </li>
            <li>
              <a class="nav-link text-white" href="#">Users</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>