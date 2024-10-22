<?php
    
    require_once("include/connection.php");

    if(isset($_POST['submit']))
    {
        if (empty($_POST['Church_Service_Attendance']) || empty($_POST['Event_Participation']) || empty($_POST['Ministry_Involvement']))
        {
            echo "Please fill in the blank Fields";
        }
        else
        {
            $Church_Service_Attendance= $_POST['Church_Service_Attendance'];
            $Event_Participation=$_POST['Event_Participation'];
            $Ministry_Involvement=$_POST['Ministry_Involvement'];
            $query = "INSERT INTO  Attendance_Tracking (Church_Service_Attendance,Event_Participation,Ministry_Involvement) VALUES ('$Church_Service_Attendance','$Event_Participation','$Ministry_Involvement') ";

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
        header("location:Attenadance Tracking.html");
    }
    
?>