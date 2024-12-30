<?php
    
    require_once("include/connection.php");

    if(isset($_POST['submit']))
    {
        if (empty($_POST['Event_Date']) || empty($_POST['Event_Time']) || empty($_POST['Event_Location']) || empty($_POST['Event_Speaker']))
        {
            echo "Please fill in the blank Fields";
        }
        else
        {
            $Event_Date= $_POST['Event_Date'];
            $Event_Time=$_POST['Event_Time'];
            $Event_Location=$_POST['Event_Location'];
            $Event_Speaker=$_POST['Event_Speaker'];
            $query = "INSERT INTO  Event  (Event_Date,Event_Time,Event_Location,Event_Speaker) VALUES ('$Event_Date','$Event_Time','$Event_Location','$Event_Speaker') ";

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
        header("location:Event.html");
    }
    
?>