<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function validateform()
        {
            var email=document.myform.email.value;
            var password=document.myform.password.value;

            if(email==""||password=="")
            {
                alert("Email or password can't be empty ");
                return false;
            }
            else if(password.length<6)
            {
                alert("password must be atleast 6 characters long");
                return false;
            }

        }

    </script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        h1{
            text-align:center;
            padding-top:25px;
        }

        .cont{
            margin: 100px auto;
            padding-left:50px;
            padding-right:50px;
            position: relative;    
            width: 400px;
            height: 500px;
            background: transparent;
            color: #e9f1f7
            border: 2px solid rgba(255, 255, 255, .5);
            border-radius: 20px;
            backdrop-filter: blur (20px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            
        }
        .log{
            padding-top:20px;
        }
        .submit{
            width:100%;
            height:45px;
            background:black;
            color:white;
            border:none;
            outline:none;
            border-radius:6px;
            cursor:pointer;
            font-size:1em;
            font-weight:500;
        }
        .submit:hover{
            background-color:gray;
            color:black;
        }

        .button {
            text-align: center;
            padding: 1rem;
            border-radius: 1.5rem;
            background-color: #816C61;
            margin: 10px auto;
            width: 300px;
        }

        .button:hover{
          background-color: #E7DFC6;
        }
        
       

    </style>
  </head>
  <body>
    
  <?php require'navv/nav.php' ?> 
<div class="cont">   
    <h1> REGISTRATION!</h1>

    <form class="log" action="" method="Post" name="myform" onsubmit="return validateform()">
    <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <button type="submit" value="submit" class="button">Submit</button>
</form>
</div>

<?php 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','hotel_management');
    if ($conn->connect_error) {
      die('Connection Failed : '. $conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into user_registration(username, email, password)
      values(?, ?, ?)");
      $stmt->bind_param("sss", $username, $email, $password);
      $stmt->execute();
      echo"REGISTERED SUCCESSFULLY....";
      $stmt->close();
      $conn->close();
    }
    ?>
<footer class="footer" id="about">


    </footer>
    <?php require 'include/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>