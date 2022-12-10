<?php
include 'db.php';

    if(isset($_POST['submit'])){

        $name = $_POST['nameSend'];
        $email = $_POST['emailSend'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $pass = $_POST['pass'];
        $selectOption = $_POST['cars'];
        $color = $_POST['color'];        
        $birthDay = $_POST['date'];
        $appDay = $_POST['appDate'];
        $time = $_POST['time'];

        $checkbox = $_POST['vehicles'];
        $radioBtn = $_POST['fav_language'];

        $textArea = $_POST['myReview'];
        $week = $_POST['weekInput'];
        $month = $_POST['monthInput'];
        $url = $_POST['urlInput'];
        $range = $_POST['rangeInput'];
        $image = $_POST['imageInput'];
        $file = $_POST['fileInput'];

        $insert = "INSERT INTO `input_submit`(`name`, `email`, `phone`, `age`, `password`, `cars`, `color`, `date`, `dateof_appointment`, `time`, `vehicles`, `language`) VALUES ('$name','$email','$phone','$age','$pass','$selectOption','$color','$birthDay','$appDay','$time','$checkbox', '$radioBtn')";

        $insertQuery = mysqli_query($connection, $insert);

        echo"successfully Submitted";

        // for closing db connection
        mysqli_close($connection);
    }

    // if(isset($_POST['radioInsert'])){
    //     $radioBtn = $_POST['fav_language'];
    //     $insert = "INSERT INTO `radio`(`language`) VALUES ('$radioBtn')";
    //     $insertQuery = mysqli_query($connection, $insert);
    //     mysqli_close($connection);
    //     echo"successfully languages submit";

    // }
?>