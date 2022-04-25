<?php
    
    $con= mysqli_connect("localhost","root","","shopdb");
// check connection
if (mysqli_connect_errno())
    {
        echo "Failed to connect to My_SQL". mysqli_connect_error();
    }

?>