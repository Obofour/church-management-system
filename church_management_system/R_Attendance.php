<?php

    require_once("include/connection.php");

    $query = "SELECT * FROM Attendance_Tracking ";

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
                    <!-- <form action="search_results.php" method="GET" class="search-bar">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit"><i class='bx bx-search'></i></button>
                    </form> -->
                            <div class="card-title">
                                 <h3 class="bg-secondary text-white text-center ">Retrival of All Attendance Information</h3>
                            </div>
                            <div class="card-body">
                                
                                <p><a class="btn btn-info text-white" href="Attenadance Tracking.html">+ Add New Record</a></p>
                                <table class="table table-bordered">
                                   <tr>
                                    <td><b>Attendance id</b></td>
                                    <td><b>Church Service Attendance</b</td>
                                    <td><b>Event Participation</b></td>
                                    <td><b>Ministry Involvement</b></td>                                    
                                    
                                   </tr>
                                   <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $Id=$row['Attendance_id'];
                                        $Service = $row['church_service_attendance'];
                                        $Participation=$row['event_participation'];
                                        $Involvement=$row['Ministry_involvement'];
                                        ?>

                                        <tr>
                                            <td> <?php echo $Id ?></td>
                                            <td> <?php echo $Service ?></td>
                                            <td> <?php echo $Participation ?></td>
                                            <td><?php echo $Involvement ?></td>
                                            
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