<?php
    
    require_once("include/connection.php");

    if(isset($_POST['submit']))
    {
        if (empty($_POST['Leaders']) || empty($_POST['Roles']) || empty($_POST['Upcoming_Event']))
        {
            echo "Please fill in the blank Fields";
        }
        else
        {
            $Leaders= $_POST['Leaders'];
            $Roles=$_POST['Roles'];
            $Upcoming_Event=$_POST['Upcoming_Event'];
            $query = "INSERT INTO  Ministries (Leaders,Roles,Upcoming_Event) VALUES ('$Leaders','$Roles','$Upcoming_Event') ";

            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            
            }
            else
            {
                echo "There is an error in your Query. Please check and try again". $con->error;
            }
        }    
            
    }    
    else
    {
        header("location:Ministries and Volunteer.html");
    }
    
?>