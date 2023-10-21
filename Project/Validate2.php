<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $edu = $_POST['edu'];
    $Inst = $_POST['InsI'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $passwrd = $_POST['pass'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'project';

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->error) {
        echo 'Error' . $conn->error;
    } else {
        // echo 'Connected';

        $sql = "INSERT INTO `teachersrecord`(`FirstName`, `LastName`, `Age`, `DOB`, `Qualification`, `Institute`, `Username`, `Email`, `Password`, `Phone Number`, `Address`, `City`) VALUES ('" . $fname . "','" . $lname . "','" . $age . "','" . $dob . "','" . $edu . "','" . $Inst . "','" . $user . "','" . $email . "','" . $passwrd . "','" . $phone . "','" . $address . "','" . $city . "')";

        if ($conn->query($sql) != TRUE) {
            echo $conn->error;
        } else {
            echo '<h1 class="heading">Welcome To Edulogy </h1> <br>';
            echo '<p>Account is  Created go to Login </p> <br>';
            echo ' <a href="./TeacherLogin.php">Go To Teacher Login Page</a>';
        }
    }
    ?>
</body>

</html>