<?php
    
    require_once("include/connection.php");

    if(isset($_POST['submit']))
    {
        if (empty($_POST['Date']) || empty($_POST['Amount']) || empty($_POST['Purpose']) || empty($_POST['D_Info']))
        {
            echo "Please fill in the blank Fields";
        }
        else
        {
            $Date= $_POST['Date'];
            $Amount=$_POST['Amount'];
            $Purpose=$_POST['Purpose'];
            $D_Info=$_POST['D_Info'];
            $query = "INSERT INTO Donation (Date,Amount,Purpose,D_Info) VALUES ('$Date','$Amount','$Purpose','$D_Info') ";

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
        header("location:Donation and Offering.html");
    }
    
?>