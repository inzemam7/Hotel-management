<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        html{
            scroll-behavior: smooth;
            font-size: medium;
        }
        ul li {
            display: inline-block;
            list-style-type: none;
            padding: 0.8rem;

        }

        li a {
            display: list-item;
            width: 100%;
            border-radius: 2rem;
            text-decoration: none;
        }

        li a:hover,
        li a:focus {
            background: #555;
            text-decoration: underline;
            color: antiquewhite;
        }
    </style>
</head>

<body>
    <h2>[insert hotel name]</h2>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="adminlogin.php">ADMIN</a></li>
        <li><a href="userlogin.php">USER</a></li>
        <li><a href="bookings.php">BOOKINGS</a></li>
        <li><a href="#about">ABOUT</a></li>
    </ul>


</body>

</html>