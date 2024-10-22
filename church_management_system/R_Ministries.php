<?php

    require_once("include/connection.php");

    $query = "SELECT * FROM Ministries ";

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
                                 <h3 class="bg-secondary text-white text-center ">Retrival of All Ministries's Information</h3>
                            </div>
                            <div class="card-body">
                                <p><a class="btn btn-info text-white" href="Ministries and Volunteer.html">+ Add New Record</a></p>
                                <table class="table table-bordered">
                                   <tr>
                                    <td><b>Leaders</b</td>
                                    <td><b>Roles</b></td>
                                    <td><b>Upcoming Event</b></td>
                                    
                                   </tr>
                                   <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $Leaders = $row['Leaders'];
                                        $Roles=$row['Roles'];
                                        $Upcoming_E=$row['Upcoming_Event'];
                                        ?>

                                        <tr>
                                            <td> <?php echo $Leaders ?></td>
                                            <td> <?php echo $Roles ?></td>
                                            <td> <?php echo $Upcoming_E ?></td>
                                            
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