<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        html {
            scroll-behavior: smooth;
            font-size: medium;
        }

        ul li {
            display: inline-block;
            list-style-type: none;
            padding: 1rem;
            border-radius: 5em;

        }

        li a {
            display: list-item;
            width: 100%;
            text-decoration: none;
            border-radius: 5rem;
        }

        li a:hover,
        li a:focus {
            background: #333;
            text-decoration: none;
            color: mistyrose;
        }

        a{
            text-decoration: none;

        }
    </style>
</head>

<body>
    
        <h1>[insert hotel name]</h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="adminlogin.php">ADMIN</a></li>
            <li><a href="userlogin.php">USER</a></li>
            <li><a href="bookings.php">BOOKINGS</a></li>
            <li><a href="#about">ABOUT</a></li>
        </ul>
    
        <?php
    // Define the path to your image
    $imagePath = 'images/hm 2.jpg';
    ?>
        <img src="<?php echo $imagePath; ?>" alt="this is an image">
    

    <p>
        <a href="#">Back to top</a>
    </p>
    <footer id="about">
        

    </footer>
</body>

</html>