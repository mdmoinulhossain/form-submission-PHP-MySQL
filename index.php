<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .main_body{
            background-color: #F0F8FF;
        }
        .form_body{
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }
        .form{
            display: flex;
            flex-direction: column;
        }
        .form span{
            margin: 10px 0;
        }
    </style>
</head>
<?php
include 'db.php';

    if(isset($_POST['submit'])){

        $name = $_POST['nameSend'];
        $email = $_POST['emailSend'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $pass = $_POST['pass'];

        $insert = "INSERT INTO `input_submit`(`name`, `email`, `phone`, `age`, `password`) VALUES ('$name','$email','$phone','$age','$pass')";

        $insertQuery = mysqli_query($connection, $insert);

        echo"successfully Submitted";

        // for closing db connection
        mysqli_close($connection);
    }
?>
<body>
    <main class="main_body">
        <section class="form_body" method="POST" >
            <form action="#" method="post" enctype="multipart/form-data" class="form">
                <span>
                    <label for="name">Name:</label>
                    <input type="text" name="nameSend" id="name" />
                </span>
                <span>
                    <label for="email">Email:</label>
                    <input type="email" name="emailSend" id="email" />
                </span>
                <span>
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone" />
                </span>
                <span>
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" />
                </span>
                <span>
                    <label for="pass">Password:</label>
                    <input type="password" name="pass" id="pass" />
                </span>
                <span>
                    <label for="color">Favorite color:</label>
                    <input type="color" name="color" id="color" />
                </span>
                <span>
                    <label for="date">Birth date:</label>
                    <input type="date" name="date" id="date" />
                </span>
                <span>
                    <label for="app-date">Appiontment date:</label>
                    <input type="datetime-local" name="appDate" id="app-date" />
                </span>
                <span>
                    <label for="time">Launch Time:</label>
                    <input type="time" name="time" id="time" />
                </span>
                <span>
                    <p>Vehicles</p>
                    <input type="checkbox" id="bike" name="bike" value="Bike">
                    <label for="bike"> I have a bike</label><br>
                    <input type="checkbox" id="car" name="car" value="Car">
                    <label for="car"> I have a car</label><br>
                    <input type="checkbox" id="boat" name="boat" value="Boat">
                    <label for="boat"> I have a boat</label>
                </span>
                <span>
                    <p>Please select your favorite Web language:</p>
                      <input type="radio" id="html" name="fav_language" value="HTML">
                      <label for="html">HTML</label><br>
                      <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">CSS</label><br>
                      <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                      <label for="javascript">JavaScript</label>
                </span>
                <span>
                    <label for="cars">Choose a car:</label>
                    <select name="cars" id="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </span>
                <span>
                    <p>Write your Review:</p>
                    <textarea id="myReview" name="myReview" rows="4" cols="50"></textarea>
                </span>
                <span>
                    <label for="week">Week:</label>
                    <input type="week" name="weekInput" id="week">
                </span>
                <span>
                    <label for="month">Month:</label>
                    <input type="month" name="monthInput" id="month">
                </span>
                <span>
                    <label for="url">Website Url:</label>
                    <input type="url" name="urlInput" id="url">
                </span>
                <span>
                    <label for="range">Your range:</label>
                    <input type="range" name="rangeInput" id="range" min="0" max="100">
                </span>
                <span>
                    <label for="image">Your Image:</label>
                    <input type="image" name="imageInput" id="image">
                </span>
                <span>
                    <label for="file">Your File:</label>
                    <input type="file" name="fileInput" id="file">
                </span>
                <br/>
                <br/>
                <button type="submit" value="Submit" name="submit">Submit</button>
            </form>
        </section>        
    </main>
</body>
</html>
