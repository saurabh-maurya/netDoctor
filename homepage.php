<?php
    ob_start();
    require 'connect.php'; 
    session_start();
?>
<html>
    
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css2.css" />
        <link rel="stylesheet" href="common.css"/>
        <style>
         body
            {
                font-family: sans-serif;
                margin: 0px;
                padding: 0px;
            }

        </style>
     </head>
<body>
    <div id="big-wrapper">
        <div class="top-section">
            <img id="top-image" src="images/top1.jpg"/>
        </div>        
    </div>
    <br />
    
        Welcome, <?php echo $_SESSION['username'] ?>
        <br />
    <hr>
<div>
    <div id="main-table">
        <table id="table">
            <tr>
                <th> Application ID </th>
                <th> Patient Name </th>
                <th> Doctor Speciality</th>
                <th> Application Date </th>
            </tr>
<?php
    
    if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        $query  ="SELECT App_id,Pat_name,Specialist,App_date FROM apointment_application WHERE Username= '" . $_SESSION['username'] . "'";
        
    }
    $result = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($result))
        {
    echo "<tr>";
 	echo "<td>".$row['App_id']."</td>";
 	echo "<td>".$row['Pat_name']."</td>";
 	echo "<td>".$row['Specialist']."</td>";
    echo "<td>".$row['App_date']."</td>";
    echo "</tr>";
  }     
?>
  </table>           
    </div>
    <br />
    <table style="width:70%;" align="center">
        <tr>
    <div id="link-collection">
        <td>
        <center>
        <div class="link">
        Create Application
        <br />
                <a href="application.php">
            <input type="button" name="create" class="butt" value="Create"/>
                </a>
        </div>
            </center>
        </td>

        <td>
                <center>
            <div class="link">
        Update An application
            <br />
        <form action="homepage.php" name="update-form" method="post">
        <input type="number" placeholder="enter app_ID" style="margin-top: 20px;" name="update" class="text"> <br />
        <input type="" placeholder="dd-mm-yy" style="margin-top: 30px;" name="date" class="text"> <br />
        <br />
        <input type="submit" value="update" name="up">
        </form>
        </div>
            </center>
        </td>
        <td>
        <center>
        <div class="link">
        Remove an application
        <form action="homepage.php" method="post">
        <input type="text" name="delete" placeholder="enter application number" style="margin-top: 20px;" class="text">
            <br />
            <br />
            <input type="submit" value="delete" name="del">
            </form>
        </div>
            </center>
        </td>
        <td>
        <center>
        <div class="link">
        Logout
        <br />
        
        <form class="form" action="homepage.php" id="logout-form" method="post" align="center">
             <input name="logout" type="submit" value="Logout" class="butt" id="logout_btn"/>
        </form>
        </div>
            </center>
        </td>
    </div>
        </tr>
    </table>
<?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        header('location:login.php');
    }
        
       @ $delete = $_POST['delete'];
       @ $update = $_POST['update'];
       @ $date = $_POST['date'];
   // sql to delete a record
    if(isset($_POST['del']))
    {
        $sql = "DELETE FROM apointment_application WHERE App_id=$delete";

        if (mysqli_query($db, $sql)) 
        {
            echo "Record deleted successfully";
        } 
        else 
        {
            echo "Error deleting record: " . mysqli_error($db);
        }

        mysqli_close($db);
    }
    if(isset($_POST['up']))
    {
        $sql1 = "UPDATE apointment_application SET App_date = $date WHERE App_id=$update";
        
        if(mysqli_query($db, $sql1))
        {
            echo "Record successfully updated";
        }
        else
        {
            echo "Error updating record: " . mysqli_error($db);
        }
        
        mysqli_close($db);
    }
        
        
?>
    </div> 
</body>
</html>