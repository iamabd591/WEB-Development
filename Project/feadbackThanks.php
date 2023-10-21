<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php


$Admin = $_POST['admin_name'];
$Asses = $_POST['asses_name'];
$Feadback = $_POST['feadback'];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'project';

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->error) {
    echo 'Error' . $conn->error;
} else {
    $sql = "INSERT INTO `feadback`(`Admin Name`, `Assesment Name`,`Feadback`) VALUES ('" . $Admin . "','" . $Asses . "','" . $Feadback . "')";

    if ($conn->query($sql) == TRUE) {
        echo ' <div class="vh-100 d-flex justify-content-center align-items-center">';
        echo ' <div class="card col-md-4 bg-white shadow-md p-5">';
        echo '   <div class="mb-4 text-center">';
        echo '     <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">';
        echo '            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />';
        echo '             <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />';
        echo '        </svg>';
        echo '     </div>';
        echo '     <div class="text-center">';
        echo '         <h1>Thank You !</h1>';
        echo '         <p>Your Valueable Feadback is Save</p>';
        echo '      </div>';
        echo '  </div>';
    } else {
        echo $conn->error;
    }
}
?>
</body>

</html>