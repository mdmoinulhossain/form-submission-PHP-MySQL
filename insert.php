<?php
include 'db.php';

    if(isset($_POST['submit'])){

        $name = $_POST['nameSend'];
        $email = $_POST['emailSend'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $pass = $_POST['pass'];
        $color = $_POST['color'];
        $selectOption = $_POST['cars'];

        $insert = "INSERT INTO `input_submit`(`name`, `email`, `phone`, `age`, `password`, `selectValue`) VALUES ('$name','$email','$phone','$age','$pass','$selectOption')";

        $insertQuery = mysqli_query($connection, $insert);

        echo"successfully Submitted";

        // for closing db connection
        mysqli_close($connection);
    }
?>