<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        html {
            background-color: #E9F1F7;
        }

        ul li {
            display: inline;
            padding: 2rem;
            text-decoration: none;
            text-align: left;

        }

        .navbar {
            background-color: #2274C9;
            padding: 1rem;
            border-radius: 0rem;
            position: fixed;
            width: 100%;
        }

        .button {
            text-align: center;
            padding: 1rem;
            border-radius: 2rem;
            background-color: #816C61;
            margin: 10px auto;
            width: 145px;
        }

        .buttonH {
            text-align: center;
            padding: 1rem;
            border-radius: 0.5rem;
            background-color: #816C61;
            margin: 10px 90px;
            width: fit-content;
            height: 50px;
        }

        .footer {
            background-color: #2274C9;
            padding: 1rem;
            border-radius: 0rem;

        }

        .centre a {
            align-items: center;
            width: 145px;
            padding: 1rem;
            text-decoration: none;
        }

        .image {
            border-radius: 1rem;
            height: 400px;
            width: 600px;
            padding: 0.5rem;


        }

        .hero-image {
            background-image: url();
            height: 700px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .form {
            align-items: center;
            padding-top: .7rem;
            width: 300px;
            height: 40px;
            text-align: center;
            background-color: #e7dfc6;
            border-radius: 2rem;
            margin: 9% auto auto auto;
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
        }

        a {
            padding: 1rem;
            border-radius: 2rem;
            color: #e7dfc6;
            text-decoration: none;
        }

        a:hover {
            background-color: #E9F1F7;
            color: #816C61;
        }

        .anc {
            padding: 0.1rem;
            border-radius: 0.5rem;
        }

        .anc.hover {}

        .col {
            float: left;
            width: 33.33%;
            padding: 10px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        #hotelspage {
            display: inline-block;
            height: 450px;
            width: 100%;
            padding: 1rem;
            border-radius: 2rem;
            background-color: #e7dfc6
        }

        #hotel {
            height: 90%;
            background-color: #E9F1F7;
            width: 31%;
            padding: 10px;
            margin-left: 20px;
            border-radius: 0.5rem;
            display: inline-block;
        }

        #p{
            background-color: #E9F1F7;
            color: #816C61;
            padding: 1px;
        }
        

        .dropbtn {
            background-color: #2274C9;
            color: white;
            padding: 1rem;
            border-radius: 2rem;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #E9F1F7;
            color: #816C61;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #e7dfc6;
            min-width: 160px;
            border-radius: 2rem;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #E9F1F7;
            color: #816C61;
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }

        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    </style>
</head>

<body>

    <header class="navbar">

        <h1>ABODE BOOKINGS</h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">HOTELS</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="1star-rooms.php">1-STAR HOTEL</a>
                        <a href="3star-rooms.php">3-STAR HOTEL</a>
                        <a href="5star-rooms.php">5-STAR HOTEL</a>
                    </div>
                </div>
            </li>
            <!-- <li><a href="rooms.php">ROOMS</a></li>-->
            <li><a href="admin/adminlogin.php">ADMIN</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#about">ABOUT US </a></li>
        </ul>
        <form class="d-flex" role="search">
            <button class="btn btn-outline-dark shadow-none me-lg-3 me-3" type="submit"><a class="btn" href="login.php">
                    Login</a></button>
            <button class="btn btn-outline-dark" type="submit"><a class="btn"
                    href="registration.php">Register</a></button>
        </form>
    </header>
    <div style="padding-top: 10rem; padding-bottom: 1rem;">
        <form class="" action="">
           <!-- <input class="form" type="datetime-local" placeholder="select your check-in date & time">-->
        </form>
    </div>

    <div class="slide " style="display:inline-block;vertical-align:top;">
        <img class="mySlides image" src="images/hm 4.avif">
        <img class="mySlides image" src="images/hm 5.avif">
        <img class="mySlides image" src="images/hm 6.avif">
    </div>

    <div class="content"style="display:inline-block; padding: 1rem; border-radius: 1rem; background-color: #e7dfc6; font-size: 16px;">
        <l>
            <li>Warm Hospitality: Friendly and attentive staff providing personalized service.</li><br><br>
            <li>Delicious Dining: Quality food and diverse menu options.</li><br><br>
            <li>Comfortable Accommodations: Well-appointed rooms with plush bedding.</li><br><br>
            <li>Excellent Service: Prompt and courteous assistance throughout the stay.</li>
        </l>
    </div>

    <div id="hotelspage">
        <h3 style="text-align:center;">Celebrate your holidays at the best hotels</h3>
        <div id="hotel">
            <img src="images/hm h 1.jpg" alt="hotel 1" width="390px" height="300px">
            <button class="buttonH" ><a  class="anc" href="1star-rooms.php">BOOK A 1-STAR HOTEL</a></button>
        </div>

        <div id="hotel">
            <img src="images/hm 1.jpg" alt="hotel 2" alt="hotel 1" width="390px" height="300px">
            <button class="buttonH"><a  class="anc" href="3star-rooms.php">BOOK A 3-STAR HOTEL</a></button>
        </div>

        <div id="hotel">
            <img src="images/hm 3.webp" alt="hotel 3" alt="hotel 1" width="390px" height="300px">
            <button class="buttonH"><a  class="anc" href="5star-rooms.php">BOOK A 5-STAR HOTEL</a></button>
        </div>
    </div>
<div style="align-items: center; background-color: #e7dfc6; color: black; margin:50px; padding: 1rem; border-radius: 2rem; text-align:center;">
    <?php
// Include the common database connection script
require 'dbconnect.php';

// SQL query to select all rows from the hotel table
$sql = "SELECT * FROM hotel";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table border='3' style='aglin-items:center;'>";
    echo "<tr><th>Hotel Name</th>&nbsp;&nbsp;&nbsp;<th>Details</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        //echo "<td>" . $row["hotel_id"] . "</td>";
        echo "<td>" . $row["hotel_name"] . "</td>";
        //echo "<td>" . $row["hotel_type"] . "</td>";
        //echo "<td>" . $row["hotel_city"] . "</td>";
        echo "<td><a id='p' href='details.php?hotel_id=" . $row["hotel_id"] . "'>View Details</a></td>";
        echo "</tr>";
    }

    // End HTML table
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
</div>

    <div class="centre button">
        <a href="#">Back to top</a>
    </div>
    <footer class="footer" id="about">
        <h2 style="text-align:center">About Us</h2>
        <div class="row">
            <div class="col p-4">
                <h3>Abode Bookings</h3>
                <p>Developed By <br>
                     <l>
                        <li>Nawaz Mohd Khan(22361A0577)</li>
                        <li>Syed Inzemamuddin(22361A05B4)</li>
                        <li>V.Nikitha(22361A0580)</li>
                        <li>K.Sharnika(22361A0591)</li>

                   </l>
                </p>
            </div>

            <div class="col p-4">
                <h5 class="mb-3">Links</h5>
                <a class="anc" href="index.php" style="color:black">Home</a><br>
                <a class="anc" href="rooms.php" style="color:black">Rooms</a><br>
                <a class="anc" href="#Contact" style="color:black">Contact</a><br>
                <a class="anc" href="#About" style="color:black">About Us</a><br>
            </div>

            <div class="col p-4">
                <h5>Follow us</h5>
                <a class="anc" href="#" style="color:black"> <i class="bi bi-twitter me-1"></i>Twitter</a><br>
                <a class="anc" href="#" style="color:black"> <i class="bi bi-facebook me-1"></i>Facebook</a><br>
                <a class="anc" href="#" style="color:black"> <i class="bi bi-instagram me-1"></i>Instgram</a><br>
            </div>
        </div>


    </footer>
    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        config = {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            altInput: true,
            altFormat: "F j, Y (h:S K)"
        }
        flatpickr("input[type=datetime-local]", config);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>