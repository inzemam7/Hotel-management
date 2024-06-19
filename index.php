<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
            height:40px ;
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

        .anc{
            padding: 0.1rem;
            border-radius: 0.5rem;
        }

        .anc.hover{

        }

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

        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    </style>
</head>

<body>

    <header class="navbar">

        <h1>[insert hotel name]</h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="rooms.php">ROOMS</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#about">ABOUT US </a></li>
        </ul>
        <form class="d-flex" role="search">
        <button class="btn btn-outline-dark shadow-none me-lg-3 me-3" type="submit" ><a class="btn" href="login.php"> Login</a></button>
        <button class="btn btn-outline-dark" type="submit"><a class="btn" href="registration.php">Register</a></button>
      </form>
    </header>
    <div style="padding-top: 2rem; padding-bottom: 1rem;">
        <form class="" action="">
            <input class="form" type="datetime-local" placeholder="select your check-in date & time">
        </form>
    </div>

    <div style="display:inline-block;vertical-align:top;">
        <img class="mySlides image" src="images/hm 4.avif">
        <img class="mySlides image" src="images/hm 5.avif">
        <img class="mySlides image" src="images/hm 6.avif">
    </div>

    <div style="display:inline-block; padding: 1rem; border-radius: 1rem; background-color: #e7dfc6; font-size: 16px;">
        <l>
            <li>Warm Hospitality: Friendly and attentive staff providing personalized service.</li><br><br>
            <li>Delicious Dining: Quality food and diverse menu options.</li><br><br>
            <li>Comfortable Accommodations: Well-appointed rooms with plush bedding.</li><br><br>
            <li>Excellent Service: Prompt and courteous assistance throughout the stay.</li>
        </l>
    </div>

    

    <div class="centre button">
        <a href="#">Back to top</a>
    </div>
    <footer class="footer" id="about">
        <h2 style="text-align:center">About Us</h2>
        <div class="row">
            <div class="col p-4">
                <h3>Hotel name</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Quisquam, nihil! Cum voluptate ipsum itaque aliquid ab fuga explicabo 
                    dolorum repellendus similique nisi earum iste esse ea,
                    aperiam iusto veniam molestias.</p>
            </div>

            <div class="col p-4">
                <h5 class="mb-3">Links</h5>
                <a class="anc" href="#" style="color:black">Home</a><br>
                <a class="anc" href="#" style="color:black">Rooms</a><br>
                <a class="anc" href="#" style="color:black">Contact</a><br>
                <a class="anc" href="#" style="color:black">About Us</a><br>
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