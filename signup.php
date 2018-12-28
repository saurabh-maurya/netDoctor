<?php
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
            h1{
                color: white;
            }
        </style>
    </head>
    <body>
     <script type="text/javascript">
            function checkForm(form)
        {
            if(form.username.value == "") 
            {
              alert("Error: Username cannot be blank!");
              form.username.focus();
              return false;
            }
            re = /^\w+$/;
            if(!re.test(form.username.value)) 
            {
              alert("Error: Username must contain only letters, numbers and underscores!");
              form.username.focus();
              return false;
            } 
            if(form.email_id.value == "") 
            {
              alert("Error: Email_id cannot be blank!");
              form.email_id.focus();
              return false;
            }
            if(form.mob_no.value == "") 
            {
              alert("Error: Mobile_no cannot be blank!");
              form.mob_no.focus();
              return false;
            }
            re = /[0-9]/;
            if(!re.test(form.mob_no.value))
            {
              alert("Error: Mobile_no should only contain numbers");
              form.mob_no.focus();
              return false;
            }
            if(form.mob_no.value.length < 10) 
            {
                alert("Error: Mobile no must contain at least 10 numbers!");
                form.mob_no.focus();
                return false;
            }
            re = /[a-z]/;
            if(re.test(form.mob_no.value)) 
            {
                alert("Error: Mobile_no must not contain letter (a-z)!");
                form.mob_no.focus();
                return false;
            }
            re = /[A-Z]/;
            if(re.test(form.mob_no.value)) 
            {
                alert("Error: Mobile_no must not contain letter (A-Z)!");
                form.mob_no.focus();
                return false;
            }
            if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) 
            {
              if(form.pwd1.value.length < 6) 
              {
                alert("Error: Password must contain at least six characters!");
                form.pwd1.focus();
                return false;
              }
              if(form.pwd1.value == form.username.value) 
              {
                alert("Error: Password must be different from Username!");
                form.pwd1.focus();
                return false;
              }
              re = /[0-9]/;
              if(!re.test(form.pwd1.value)) 
              {
                alert("Error: password must contain at least one number (0-9)!");
                form.pwd1.focus();
                return false;
              }
              c
            } else
              {
                alert("Error: Please check your password!");
                form.pwd1.focus();
                return false;
              }

        }
     </script>
        <div id="big-wrapper">
            <div class="top-section">
                <img id="top-image" src="images/top1.jpg"/>
            </div>        
        </div>
        <div class="form-container" id="signup-container">
                <form name="form" action="signup.php?submit=true" method="post" id="login-form" class="form" onSubmit="return checkForm(this);" onload="reset" autocomplete="off">
                    <h1 align="center"> SIGN UP </h1>
                    <br />
                    <center>
                        <input type="text" class="user-input" placeholder="username" name="username" /><br />
                        <input type="email" class="user-input" placeholder="Email" name="email_id"/><br />
                        <input type="tel" class="user-input" placeholder="Mob. No" name="mob_no" /><br />
                        <input type="password" placeholder="password" name="pwd1" class="user-input"/> <br />
                        <input type="password" placeholder="confirm password" name="pwd2" class="user-input"/> <br />
                        <br />
                        <br />
                        <input type="submit" id="signup_btn" name="submit_btn" value="Sign up" class="button"/> <br />
                        <font size="2">Already registred? <a href="login.php" style="color:chartreuse;"> LOGIN </a> </font>
                    </center>
                </form>    
            <?php
                if(isset($_POST['submit_btn']))
                {
                   //echo '<script type="text/javascript">alert("Sign Up button clicked")</script>';
                    $usernam = $_POST['username'];
                    $emailid = $_POST['email_id'];
                    $mobno = $_POST['mob_no'];
                    $pass1 = $_POST['pwd1'];
                    $pass2 = $_POST['pwd2'];
                    if($pass1==$pass2)
                    {
                        $query = "SELECT * FROM registration WHERE Username='$usernam'";
                        $query_run = mysqli_query($db,$query);
                        
                        if(mysqli_num_rows($query_run)>0)
                        {
                           echo '<script type="text/javascript"> alert("User already exists.....try another Username")</script>';
                        }
                        else
                        {
                            $queryy = "INSERT INTO registration(Username,Email,Mobile_no,Password) VALUES('$usernam','$emailid','$mobno','$pass1')";
                            $queryy_run = mysqli_query($db,$queryy);
                            if($queryy_run)
                            {
                                echo '<script type="text/javascript"> alert("User Registered...Go to login page to login")</script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript"> alert("Error!")</script>';
                            }
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert("Password and Confirm Passwod do not match!")</script>';
                    }
                   
                    
                }
            
            ?>
        </div>
    </body>
    
</html>
