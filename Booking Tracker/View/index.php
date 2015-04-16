<?php
include("components/header.php");
include("components/bookingsTab.php");
include("../Model/connect.php");

session_start();
createTaskbar();

?>

<link rel="stylesheet" href="style.css" type="text/css">


<?php

printBookings();
closeConnections();
createTab();

?>


    
    
        
        <form action = "Controller/insert.php" method="post">
        
            <input type="submit" name="insert" value="Create Booking number" />
    <!-- Page contents -->
        </form>
    </body>
