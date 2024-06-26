<?php 
<<<<<<< HEAD
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query="select * from users";
$result=mysqli_query($conn,$query);

?>
=======
 require('extra.php');

 
 ?>
>>>>>>> f96cd1aa19595e36feffd9fbf3351a511f050ffd
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
                    <h3>ROOMS</h3>
                    <div class="card border-0 shadow sm mb-4">
                        <div class="card-body">
                            <div class="text-end mb-4">
                                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                                <i class="bi bi-plus-square">+ Add</button>
                            </div>
                            <div class="table-responsive-lg" style="height:450px; overflow-y:scroll;">
                                <table class="table table-hover border">
                                    <thead>
                                        <tr class="text-light" style="background-color:dark;">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="room-data">
                                    <?php

                                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>

        <div class="modal fade" id="add-room" tabindex="-1">
            <div class="modal-dialog">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="add_room_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Room</h5>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-10 mb-3" style="margin-left:30px;">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required >
                            </div>
                            <div class="col-md-10 mb-3" style="margin-left:30px;">
                                <label class="form-label fw-bold">Area</label>
                                <input type="number" min="1" name="Area" class="form-control shadow-none" required >
                            </div>
                            <div class="col-md-10 mb-3" style="margin-left:30px;">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required >
                            </div>
                            <div class="col-md-10 mb-3" style="margin-left:30px;" >
                                <label class="form-label fw-bold">Quantity</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit"  value="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
        </script>
    </body>
</html>