<?php

    require_once("include/connection.php");

    $query = "SELECT * FROM Members_Information ";

    $result=mysqli_query($con , $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div>
            <input type="image" src="Logo.jpg" width="40px" height="40px">
        </div>
    </nav>
<body class="bg-light" style="background-image: url('Wallpaper.jpeg');">
    <!-- Creating Container to hold the Content -->
    <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="nav-item mt-5">
                            <div class="card-title">
                                 <h3 class="bg-secondary text-white text-center ">Retrival of All Member's Information</h3>
                            </div>
                            <div class="card-body">
                                <p><a class="btn btn-info text-white" href="Member Information.html">+ Add New Record</a></p>
                                <table class="table table-bordered">
                                   <tr>
                                    <td>Member's id</td>
                                    <td>Member's First Name</td>
                                    <td>Member's Last Name</td>
                                    <td>Member's Other Name</td>
                                    <td>Member's Contact</td>
                                    <td>Member's Date of birth</td> 
                                    <td>Member's family detail</td>
                                    <td>Member's Church Ministry</td>
                                    
                                   </tr>
                                   <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row['Unique_id'];
                                        $First_Name=$row['First_Name'];
                                        $Last_Name=$row['Last_Name'];
                                        $Other_Name=$row['Other_Name'];
                                        $Contact=$row['Contact'];
                                        $Date=$row['Date_of_Birth'];
                                        $Family=$row['Family_Details'];
                                        $Ministry=$row['Church_Participation'];

                                        ?>

                                        <tr>
                                            <td> <?php echo $ID ?></td>
                                            <td> <?php echo $First_Name ?></td>
                                            <td> <?php echo $Last_Name ?></td>
                                            <td> <?php echo $Other_Name ?></td>
                                            <td> <?php echo $Contact ?></td>
                                            <td><?php echo $Date ?></td>
                                            <td> <?php echo $Family ?></td>
                                            <td> <?php echo $Ministry ?></td>
                                           
                                        </tr>
                                        <?php
                                    } ?>

                                </table>


                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>

    </div>
</body>
</html>