<?php

    // * NOTE: Connect to database
    
    $con = mysqli_connect("localhost", "root", "", "user");

    if(!$con)
    {
        echo mysqli_connect_error();
    }
    else
    {
        //echo "Connected!";
    }

?>