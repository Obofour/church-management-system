<?php

    require_once("include/connection.php");

    $query = "SELECT * FROM Event ";

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
                                 <h3 class="bg-secondary text-white text-center ">Retrival of All Event's Information</h3>
                            </div>
                            <div class="card-body">
                                <p><a class="btn btn-info text-white" href="Event.html">+ Add New Record</a></p>
                                <table class="table table-bordered">
                                   <tr>
                                    <td><b>Event Date</b</td>
                                    <td><b>Event Time</b></td>
                                    <td><b>Event Location</b></td>
                                    <td><b>Event Speaker</b></td> 
                                    
                                   </tr>
                                   <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $Date = $row['Event_Date'];
                                        $Time=$row['Event_Time'];
                                        $Location=$row['Event_Location'];
                                        $Speaker=$row['Event_Speaker'];
                                        ?>

                                        <tr>
                                            <td> <?php echo $Date ?></td>
                                            <td> <?php echo $Time ?></td>
                                            <td> <?php echo $Location ?></td>
                                            <td><?php echo $Speaker ?></td>
                                            
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