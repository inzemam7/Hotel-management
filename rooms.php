<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rooms</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php require 'navv/nav.php' ?>

  <h2 class="mt-3" style="text-align:center">OUR ROOMS</h2>
  <div class="container mb-5" style="display:inline-block;vertical-align:top;">
    <div class="row">
      <div class="col-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow ">
          <div class="container-fluid flex-lg-column align-items-stretch mt-2">
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
          <!-- <div style="display:inline-block;" class="collapse navbar-collapse flex-column align-items-stretch mt-2">
            <img src="images/hm b1.jpg" alt="" width="200px" height="100px">-->
      </div>
      </nav>
      <div class="col-lg-9 col-md-12 px-4">
      <div class="card mb-4 border-0 shadow">
        <div class="row no-gutters p-3 aline-items-center">
          <div class="col-md-4">
            <img src="..." class="card-img" alt="...">
          </div>
          <div class="col-md-2">
            <img src="..." class="card-img" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
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