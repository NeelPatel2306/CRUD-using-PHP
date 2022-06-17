<?php
    include "config.php";
    if(isset($_POST["update"])){
        $firstname = $_POST["fname"];
        $user_id = $_POST["user_id"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $city = $_POST["city"];

        $sql = "UPDATE `crud` SET `Firstname`='$firstname', `Lastname`='$lastname', `Email`='$email', `City`='$city' WHERE `id`='$user_id'";
        $result = $conn -> query($sql);

        if($result == TRUE){
            echo "Record updated successfully.";
        }
        else{
            echo "Error-".$sql."<br>".$conn->error;
        }
    }
if (isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM `crud` WHERE `id` = '$user_id'";
    $result = $conn -> query($sql);

    if($result->num_rows>0){
        while($row = $result -> fetch_assoc()){
            $id = $row['id'];
            $firstname = $_POST["fname"];
            $lastname = $_POST["lname"];
            $email = $_POST["email"];
            $city = $_POST["city"];
        }
    ?>
    <h2> Updation Form </h2>
    <center><br><div style = "border: 2px solid black ; width: 30% ; background-color: #00FFFF" >
    <br>
    <form action= "" method = "post">

        <center><div class = "w3-container w3-teal" style = "height: 50%; width: 50%; border: 2px solid black; background-color: yellow "> 
        <h2> FILL THE DETAILS </h2>
        </div>
        </center>
    <br>
    <br>
        <center><b>First name: </b><input type = "text" name="fname" placeholder = "First Name" style = "width: 30%"><br></center>
        <br>
        <center><input type="hidden" name="user_id" value="<?php echo $id; ?>">
        <br>
        <center><b>Last name: </b><input type = "text" name="lname" placeholder = "Last Name" style = "width: 30%"><br>
        <br>
        <center><b>Email: </b><input type = "email" name="email" placeholder = "Email" style = "width: 35%"><br>
        <br>
        <center><b>City: </b><input type = "text" name="city" placeholder = "City" style = "width: 35%"><br>
        <br>
        <br>
        
        <br>
        <center><button type = "submit" name="update" style = "background-color: yellow">Update </button></center>
        <br>
        </div>
        </div>
    </form>
    </body>
    </html>
    <?php
    }else{
        header('Location:view.php');
    }
}
?>
