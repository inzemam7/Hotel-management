<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rooms</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .button {
            text-align: center;
            padding: 0.5rem;
            border-radius: 1rem;
            background-color: #816C61;
            margin: 30px auto;
            width: 115px;
        }

        .button:hover{
          background-color: #e7dfc6;
        }

        #anc{
      margin: 10px;
      padding: 20px;
      background-color : #e7dfc6;
      color: black;
      border-radius: 2rem;
      align-items: center;
      text-decoration: none;
      display: inline-flex;
    }
    </style>
</head>

<body>
  <?php require 'navv/navrooms.php' ?>
  <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}
?>

  <h2 class="mt-3" style=" display: inline; text-align:center; margin-left: 450px; ">OUR 5-STAR HOTEL ROOMS</h2>
  <a  id="anc" href="5star-details.php">Hotel Details</a>
  <div class=" mb-5" style="display:inline-block;vertical-align:top; width: fit-content; align-items: center;">
    <div class="row">
      <div class="col-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded ">
          <div class="container-fluid flex-lg-column align-items-stretch mt-2"
            style="background-color: #e7dfc6; border-radius: 1rem;">
            <h4>FILTERS</h4>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
              <div class="border bg-light p-3 rounded shadow ml-auto">
                <h5 class="mb-3">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow none">
              </div>

              <div class="border bg-light p-3 rounded shadow ml-auto mb-3 mt-3">
                <h5 class="mb-3">FACILITIES</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f1">Wifi</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f2">food</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f3">swimmingpool</label>
                </div>
              </div>
            </div>
          </div>
      </div>
      </nav>
      <script>
        function viewRoomDetails(roomId) {
            window.location.href = 'user_dashboard.php?room_id=' + roomId;
        }
    </script>
      <div class="col-lg-9 col-md-12 px-4" style="background-color: #e9f1f7;">
        <div class="card mb-4 border-0 shadow">
          <div class="row no-gutters p-3 aline-items-center" >
            <div class="col-md-4">
              <img src="images/PRE.jpeg" class="card-img" alt="..." height="135px">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">PRESIDENTIAL SUITE</h5>
                <p class="card-text">An opulent accommodation featuring multiple rooms, private dining and living areas, a grand bathroom, and often exclusive services like a personal butler.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-2">
            <button class="button" onclick="viewRoomDetails(7)">BOOK NOW</button>
            </div> 
            

            <div class="row no-gutters p-3 aline-items-center">
            <div class="col-md-4">
              <img src="images/PEN.jpeg" class="card-img" alt="..." height="135px">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">PENTHOUSE SUITE</h5>
                <p class="card-text">Located on the top floor, this suite offers breathtaking views, luxurious furnishings, a private terrace, and high-end amenities such as a Jacuzzi and a fully-equipped kitchen.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-2">
            <button class="button" style="margin-left:22px;" onclick="viewRoomDetails(8)">BOOK NOW</button>
            </div>
            

            <div class="row no-gutters p-3 aline-items-center">
            <div class="col-md-4">
              <img src="images/hm L3.jpg" class="card-img" alt="..." height="135px">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">ROYAL SUITE</h5>
                <p class="card-text">Designed for royalty, this suite includes lavish interiors, state-of-the-art technology, a grand piano, and access to a private elevator and personal security services.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-2">
            <button class="button" style="margin-left:45px;" onclick="viewRoomDetails(9)">BOOK NOW</button>
            </div>
            

          </div>
        </div>


      </div>
    </div>
  </div>
  </div>
  <?php require 'include/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>