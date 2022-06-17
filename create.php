<?php 
    include "config.php";

    if(isset ($_POST ['submit'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $city = $_POST['city'];

    $sql = "INSERT INTO `crud`(`Firstname`, `Lastname`, `Email`, `City`) VALUES ('$firstname','$lastname','$email','$city')";

    $result = $conn -> query ($sql);

    if($result == TRUE){
        echo "Recorded successfully.";
    }
    else{
        echo "Error-".$sql. "<br>". $conn -> error;
    }
    $conn -> close();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    
</head>
<body>
<center><br><div style = "border: 2px solid black ; width: 30% ; background-color: #00FFFF" >
    <br>
    <form action= "" name="nform" method = "post">

        <center><div class = "w3-container w3-teal" style = "height: 50%; width: 50%; border: 2px solid black; background-color: yellow "> 
        <h2> FILL THE DETAILS </h2>
        </div>
        </center>
    <br>
    <br>
        <center><b>First name: </b><input type = "text" name = "fname" placeholder = "First Name" style = "width: 30%" ><br></center>
        <br>
        <center><b>Last name: </b><input type = "text" name = "lname" placeholder = "Last Name" style = "width: 30%"><br>
        <br>
        <center><b>Email: </b><input type = "email" name = "email" placeholder = "Email" style = "width: 35%"><br>
        <br>
        <center><b>City: </b><input type = "text" name = "city" placeholder = "City" style = "width: 35%"><br>
        <br>
        <br>
        
        <br>
        <center><button type = "submit" name = "submit" style = "background-color: yellow">Submit </button></center>
        <br>
            </div>
            </div>
</body>
</html>