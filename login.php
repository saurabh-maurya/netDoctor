<?php
    session_start();
    require 'connect.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="css.css" />
        <link rel="stylesheet" href="common.css" />
        <style>
            body
            {
                font-family: sans-serif;
                margin: 0px;
                padding: 0px;
                background-image: url('images/doctor.jpg');
                background-size: cover;
            }
            h1
            {
                color: white;
            }
        </style>
    </head>
    <body>
        <div id="big-wrapper">
        <div class="top-section">
            <img id="top-image" src="images/top1.jpg"/>
        </div>        
    </div>
        <script type="text/javascript">
            function checkForm(form)
        {
            if(form.username.value == "") 
            {
              alert("Error: Username cannot be blank!");
              form.username.focus();
              return false;
            }
            if(form.pwd1.value == "") 
            {
              alert("Error: Passwod cannot be blank!");
              form.pwd1.focus();
              return false;
            }
        }
        </script>
        <div class="form-container">
                <form name="form1" action="login.php" method="post" class="form" onSubmit="return checkForm(this);" autocomplete="off">
                    <br>
                    <h1 align="center" font-color="white"> LOGIN </h1>
                    <br />
                    <br />
                    <br />
                    <br />
                    <center>
                        <input type="text" class="user-input" placeholder="username" name="username"/><br />
                        <input type="password" placeholder="password" class="user-input" name="pwd1"/>                    
                        <br />      
                        <br />
                        <br />
                        <input type="submit" name="login" value="login" class="button"/>
                        <br />
                        <font size="2">Not registred? <a href="signup.php" style="color:chartreuse;"> SIGN UP </a> </font>
                    </center>
                </form>
            <?php
              if(isset($_POST['login']))
              {
                   $username = $_POST['username'];
                     $pass1 = $_POST['pwd1'];
                  
                   $query = "SELECT * FROM registration WHERE Username='$username' AND Password='$pass1'";
                   $query_run = mysqli_query($db,$query);
                   if(mysqli_num_rows($query_run)>0)
                   {
                        $_SESSION['username']=$username;
                        header('location:homepage.php');
                   }
                   else
                   {
                         echo '<script type="text/javascript"> alert("Invalid Credentials")</script>'; 
                   }
              }
                                                                
                                        
                                                        
                                            
                                                            
            ?>
            </div>
        </body>
</html>
