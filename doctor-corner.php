
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="trial.css" />
        <link rel="stylesheet" href="common.css" />
        <style>
                   
        </style>
    </head>
    <body>

        <div id="big-wrapper">
            <div class="top-section">
                <img id="top-image" src="images/top1.jpg"/>
            </div>        
        </div>
        <h1 id="doctor-corner-head"> Doctor's Corner</h1>
        <hr id="line" />
        <!--------------- trial --------------------------------------------->
        
        <div style="width:100%; height: 300px;">
            <div class="outer-doctor-container">
                <div class="doctor-container" style="margin-left: 50px;">
                    <div class="name-container"> 
                        <center> 
                            <h3 style="color:white"> Psychologist </h3> 
                        </center>
                    </div>
                    <img src="images/doc1.jpg" class="doc-image">
                    <br />
                    <h3 align="center">Dr. Himani Kulkarni</h3>
                    <p> 
                        MBBS, DPM<br />
                        Specialisation<br />
                        Psychiatry &amp; Psychology<br />
                        <br />    
                    </p>
                    </font>
                </div>
                <br />
            
                <div class="doctor-container" style="margin-top:100px; margin-left: 50px;">
                    <div class="name-container"> 
                        <center> 
                            <h3 style="color:white"> Endocrinologist </h3> 
                        </center>
                    </div>
                    <img src="images/doc6.jpg" class="doc-image">
                        <br />
                    <h3 align="center">Dr. Milind Patil</h3>
                    <p> 
                        MBBS, MD (General Medicine), DM (Endocrinology), <br /> DNB(Endocrinology) <br />
                        Specialisation <br />
                        Endocrinology<br/>
                        <br />    
                    </p>
                    </font>
                </div>
            </div>
            <div class="outer-doctor-container">
                <div class="doctor-container" style="margin-left: 50px;">
                    <div class="name-container"> 
                        <center> 
                            <h3 style="color:white"> Gastroenterologist </h3> 
                        </center>
                    </div>
                    <img src="images/doc5.jpg" class="doc-image">
                    <h3 align="center">Dr. Pavan Hanchanale</h3>
                    <p>
                        MBBS, DNB(General Medicine), DNB(Gastroenterology)<br />
                    Specialisation <br />
Gastroenterologist &amp; Hepatologist
                    </p>
                    </font>
                </div>
                <br />
            
                <div class="doctor-container" style="margin-top:100px; margin-left:50px;">
                    <div class="name-container"> 
                        <center> 
                            <h3 style="color:white"> Neurologist </h3> 
                        </center>
                    </div>
                    <img src="images/doc4.jpg" class="doc-image">
                        <h3 align="center">Dr. Amit Ramesh Dhumale</h3>
                            <p> D.N.B (Physical Medicine &amp; Rehabilitation)<br /> Diploma Orthopedics M.B.B.S (Bombay)<br />
                                Specialisation <br />
                                Neuro Rehabilitation
                            </p>
                    </font>
                </div>            
            </div>
            <div class="outer-doctor-container">
                <div class="doctor-container" style="margin-left: 50px;">
                    <div class="name-container"> 
                        <center> 
                            <h3 style="color:white"> Nephrologist </h3> 
                        </center>
                    </div>
                    <img src="images/doc3.jpg" class="doc-image">
                    <h3 align="center"> Dr. Aniket Hase </h3>
                    <p> MBBS, DNB (Medicine), DNB (Nephrology) <br />
                        Specialisation <br />
                        Nephrology
                    </p>
                    </font>
                </div>
                <br />
            
                <div class="doctor-container" style="margin-top:100px; margin-left:50px;">
                    <div class="name-container"> 
                        <center> 
                            <h3 style="color:white"> Gastroenterologist </h3> 
                        </center>
                    </div>
                    <img src="images/doc2.jpg" class="doc-image">
                        <h3 align="center"> Dr. Dimple Jain </h3>
                        <p> M.D Pediatrics, PDCC Pediatric Gastroenterology <br />
                            Specialisation <br />
                            Peadiatric Gastroenterology
                        </p>
                    </font>
                </div>
            </div>
        
        </div>
        <div id="schedule-area" style="position:relative;">
        <h1 align="center">Doctor's Schedule</h1>
        <center>
        <table margin="auto" colspan="3"  border="4" style="color:white;" cellpadding="10">
            <font color="white">
                <tr height="90px">
 	
                    <td><h2> Doc_name</h2></td>
                    <td><h2>Doc_speciality</h2></td>
 	              <td><h2>Working_days</h2></td>	
 	          </tr> 	

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    echo "Connection failed " ;
}

$query = "SELECT  Doctor_name,Doctor_speciality,Working_days FROM doctor_schedule";
$result = mysqli_query($connect,$query);

 while($row = mysqli_fetch_assoc($result)) {
    echo "<tr height='90px'>";
 	echo "<td>".$row['Doctor_name']."</td>";
 	echo "<td>".$row['Doctor_speciality']."</td>";
 	echo "<td>".$row['Working_days']."</td>";
    echo "</tr>";
  }     

        
  mysqli_close($connect);
?>
            </font>
            </table>
            </center>
        </div>
        
    </body>
</html>