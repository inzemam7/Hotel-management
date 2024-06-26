
<?php 
 require('extra.php');
 require('db_admin.php');
 
 session_start();
 if((isset($_SESSIONٌ['adminLogin']) && $_SESSION['adminLogin']!==true))
{
    redirect('admin_dashboard.php');

}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
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
            padding-top:20px;
        }

        .cont{
            margin: 100px auto;
            padding-left:50px;
            padding-right:50px;
            position: relative;    
            width: 400px;
            height: 400px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            border-radius: 20px;
            backdrop-filter: blur (20px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            
            
        }
        .log{
            padding-top:20px;
        }
        .submit{
           
            background:black;
            color:white;
            
            outline:none;
            border-radius:6px;
            cursor:pointer;
           
        }
        .submit:hover{
            background-color:gray;
            color:black;
        }

        .button {
          
            text-align: center;
            padding: 1rem;
            cursor:pointer;
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



<div class="cont">   
    <h1>  ADMIN LOGIN!</h1>

    <form class="log"  method="POST" name="myform" >
  <div class="mb-3">
    <label for="name" class="form-label">Username</label>
    <input type="text" required class="form-control" id="name" name="admin_name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" required class="form-control" id="password" name="admin_password">
  </div>

  <button type="submit" name="submit" value="submit" class="button">Submit</button>
</form>
</div>
<footer class="footer" id="about">

</footer>

<?php 

        if(isset($_POST['submit']))
        {
            $frm_data= filterdata($_POST);
            $query="SELECT * FROM `admin_login` WHERE  `admin_name`=? AND `admin_pass`=?";
            $values = [$frm_data['admin_name'], $frm_data['admin_password']];

            $res=select ($query,$values,"ss");

          if($res->num_rows==1){
                $row=mysqli_fetch_assoc($res);
                $_SESSION['adminLogin']=true;
                $_SESSION['adminId']=$row['s_no'];
                redirect('admin_dashboard.php');

            }

            else{
                alert('error','Login failed - Invalid Details!');
            }
            

        
        }

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>