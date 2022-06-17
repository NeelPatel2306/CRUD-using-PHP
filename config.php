<?php 
    $servername = "localhost";
    $username = "n";
    $password = "";
    $dbname = "pmms";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error){
        die("Connection failed:" .$conn->connect_error);
    }
?>
