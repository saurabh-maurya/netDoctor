<?php
    ob_start();
    session_start();
    require 'connect.php'
?>
<html>
    <HEAD> 
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }  
        
        body{
            background-color: deepskyblue;
        }
        
        #big-wrapper{
            width: 100%;
            height: 200px;
            border: 5px;
            background-color: white;
            border-color: white;
            border-style: none;
            text-align: left;    
            margin-left: none;
            margin-right:100px;
            margin-bottom: auto;
        }

        .top-section{
            display: block;
            float: left;
            outline-color: white;
            width: 70%;
            height: 150px;
            margin-top: 0px;
            padding: 2px;
            position: absolute;
        }
        
        #top-image{
            position: relative;
            height: 100%;
            width: 100%;
            float: left;
            outline: none;
        }

        #application-form-container{
            padding: 5px;
            margin-top: 200px;
            position: relative;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            height: 1080px;
            width: 400px;
            overflow: none;
            background-color: white;
        }
        
        #application-form-container center{
            
            font-family: sans-serif;
        }
        
        .input{
            margin: 10px;
            height: 50px;
            width: 300px;
        }
        
        .check{
            width: 200px;
            position:absolute;
            overflow: hidden;
            height: 40px;
            margin-top: 30px;
            transition: 0.1s;
        }
        
        .check:hover{
            width: 370px;
        }
        
        .days{
            background-color: black; 
            color: white; 
            display:none;
            border-radius: 6px;
            padding: 3px;
        }
        
        .check:hover .days{
            display: inline-block;
        }
        
        #calendar{
                text-align: center;
                height:300px;
                width:300px;
                border:none;
            }
        
        .asd{
                text-align: center;
                width:20px;
                border-bottom: solid 2px blue;
                border-left:solid 1px black;
                border-right:solid 1px black;
                border-top:solid 1px grey;
            }    
            
            .a23{
                text-align: center;
                padding: 2px;
                margin: 0px;
                width: 50px;
            }
        
        #submit-button{
            border:solid 2px grey;
            background-color: white;
            height: 40px;
            width: 120px;
        }
        
        
        #submit-button:hover{
            border:solid 2px skyblue;
            background-color:skyblue;
            color: white;
            height: 40px;
            width: 120px;
        }
    </style>
    </HEAD>
    <body>        
    <div id="big-wrapper">
        <div class="top-section">
            <img id="top-image" src="images/top1.jpg"/>
        </div>        
    </div>
        <div id="application-form-container">
            <center>
               <h2> CREATE AN APPLICATION... </h2> 
            
            <form id="application-form" method="post" action="application.php" autocomplete="off" />
                <br />
                <h4>Name:</h4> 
                <input type="text" placeholder="Enter Your Name" class="input" name="nam"/>
                <br />
                <br />
                <h4>Age:</h4>
                <input type="number" placeholder="Enter Your Age" class="input" name="age" pattern="[0-9]"/>
                <br />
                <br />
                <h4>Select Your Gender-</h4>
                <select class="input" name="Gen">
                    <option> Male </option>
                    <option> Female </option>
                </select>
                <br />
                <br />
                <h4>Choose Your Specialist Doctor-</h4>
                <div class="check">
                    &nbsp;
                    <input type="radio" id="check1" name="radio" value="Gynacologist"/> Gynacologist
                    <span class="days"> Monday, Tuesday </span>       
                </div>
                <br />
                <br />
                <div class="check">
                    <input type="radio" id="check2" name="radio" value="Neurologist"/> Neurologist
                    <span class="days"> Wednesday,Thursday </span>
                </div>
                <br />
                <br />
                <div class="check">
                    <input type="radio" id="check3" name="radio" value="Cardiologist"/> Cardiologist
                    <span class="days"> Friday, Saturday </span>
                </div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <h4><center> CALENDAR </center></h4>
                <br />
                <table id="calendar" margin="0" align="center">
                    <tr margin=0>
                        <td class="asd"> Mon </td>
                        <td class="asd"> Tue </td>
                        <td class="asd"> Wed </td>
                        <td class="asd"> Thu </td>
                        <td class="asd"> Fri </td>
                        <td class="asd"> Sat </td>
                        <td class="asd"> Sun </td>
                        </tr>
                    <tr bgcolor="#9595b7">
                        <td class="a23"> 1 </td>
                        <td class="a23"> 2 </td>
                        <td class="a23"> 3 </td>
                        <td class="a23"> 4 </td>
                        <td class="a23"> 5 </td>
                        <td class="a23"> 6 </td>
                        <td class="a23"> 7 </td>
                    </tr>
                    <tr bgcolor="#d1d1e0">
                        <td class="a23"> 8 </td>
                        <td class="a23"> 9 </td>
                        <td class="a23"> 10 </td>
                        <td class="a23"> 11 </td>
                        <td class="a23"> 12 </td>
                        <td class="a23"> 13 </td>
                        <td class="a23"> 14 </td>
                    </tr>
                    <tr bgcolor="#9595b7">
                        <td class="a23"> 15 </td>
                        <td class="a23"> 16</td>
                        <td class="a23"> 17</td>
                        <td class="a23"> 18 </td>
                        <td class="a23"> 19 </td>
                        <td class="a23"> 20 </td>
                        <td class="a23"> 21 </td>
                    </tr>

                    <tr bgcolor="#d1d1e0">
                        <td class="a23"> 22 </td>
                        <td class="a23"> 23</td>
                        <td class="a23"> 24</td>
                        <td class="a23"> 15 </td>
                        <td class="a23"> 26 </td>
                        <td class="a23"> 27 </td>
                        <td class="a23"> 28 </td>
                    </tr>

                    <tr>
                        <td class="a23" bgcolor="#9595b7"> 29 </td>
                        <td class="a23" bgcolor="#9595b7"> 30</td>
                        <td class="a23" bgcolor="#9595b7"> 31</td>
                        <td >  </td>
                        <td >  </td>
                        <td >  </td>
                        <td >  </td>
                    </tr>
                </table>
                <br />
                <br />
                <h4>Preferred application date- </h4>
                <input type="date" placeholder="Preferred date" class="input" name="dat"/>
                <br />
                <br />
                <center> <input type="submit" value="Submit application" id="submit-button" name="submit_btn"></center>
            </form>
            </center>
             <?php
                if(isset($_POST['submit_btn']))
                {
                    if(isset($_SESSION['username']))
                    {
                       $username=$_SESSION['username'];
                        echo '<script type="text/javascript">alert("Appointment made......Go back to Homepage")</script>';
                        $gender=$_POST['Gen'];
                        $name = $_POST['nam'];
                        $age=$_POST['age'];
                        $specialist = $_POST['radio'];
                        $app_date = $_POST['dat'];
                        $queryy = "INSERT INTO apointment_application(Username,Pat_name,Age,Gender,Specialist,App_date) VALUES('$username','$name','$age','$gender','$specialist','$app_date')";
                            $queryy_run = mysqli_query($db,$queryy);
                            if($queryy_run)
                            {
                             echo '<script type="text/javascript">alert("Appointment made......Go back to Homepage");window.location.href="homepage.php"</script>';
                            }
                            else
                            {
                                echo '<script type="text/javascript"> alert("Error!")</script>';
                            }
                    }
               
                 }
             ?>
                    
        </div>
    </body>
</html>