<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        }

        .navbar {
            background-color: #2274A5;
            padding: 1rem;
            border-radius: 2rem;
        }

        .button {
            text-align: center;
            padding: 1rem;
            border-radius: 2rem;
            background-color: #816C61;
        }

        .footer {
            background-color: #2274A5;
            padding: 1rem;
            border-radius: 2rem;

        }

        .centre {
            align-items: center;
            width: auto;
            padding: 1rem;
        }

        .image {
            padding-top: rem;
            border-radius: 2rem;

        }

        .hero-image {
            background-image: url("images/hm 11.webp");
            height: 700px;
            width="100%";
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .form {
            align-items: center;
            padding-top: 0.7rem;
            width: 300px;
            height: fit-content;
            text-align: center;
            background-color: #E9F1F7;
            border-radius: 2rem;
            margin: 5%;
            margin-left: 37%;

        }

        a {
            padding: 1rem;
            border-radius: 2rem;
        }

        a:hover {
            background-color: #80c3f7;
        }
    </style>
</head>

<body>
    <header class="navbar">

        <h1>[insert hotel name]</h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="adminlogin.php">ADMIN</a></li>
            <li><a href="userlogin.php">USER</a></li>
            <li><a href="bookings.php">BOOKINGS</a></li>
            <li><a href="#about">ABOUT</a></li>
        </ul>
    </header>
    <div style="padding-top: 1rem; padding-bottom: 1rem;">
        <form class="hero-image image" action="">
            <input class="form" type="datetime-local" placeholder="select your check-in date & time">
        </form>
    </div>
    <!--<img class="image hero-image" src="images/hm 11.webp" alt="" width="100%" height="700px">-->
    <div class="centre button">
        <a href="#">Back to top</a>
    </div>
    <footer class="footer" id="about">


    </footer>
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
</body>

</html>