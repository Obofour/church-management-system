<?php
    
    require_once("include/connection.php");

    if(isset($_POST['submit']))
    {
        if (empty($_POST['Unique_id']) || empty($_POST['First_Name']) || empty($_POST['Last_Name']) || empty($_POST['Contact']) || empty($_POST['Date_Of_Birth']) ||empty($_POST['Family_Details']) || empty($_POST['Church_Participation']))
        {
            echo "Please fill in the blank Fields";
        }
        else
        {
            $Unique_id= $_POST['Unique_id'];
            $First_Name=$_POST['First_Name'];
            $Last_Name=$_POST['Last_Name'];
            $Other_Name=$_POST['Other_Name'];
            $Contact=$_POST['Contact'];
            $Date_Of_Birth=$_POST['Date_Of_Birth'];
            $Family_Details=$_POST['Family_Details'];
            $Church_Participation=$_POST['Church_Participation'];

            $query = "INSERT INTO  Members_Information (Unique_id,First_Name,Last_Name,Other_Name,Contact,Date_Of_Birth,Family_Details,Church_Participation) VALUES ('$Unique_id','$First_Name','$Last_Name','$Other_Name','$Contact','$Date_Of_Birth','$Family_Details','$Church_Participation') ";

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
        header("location:Member Information.html");
    }
    
?>