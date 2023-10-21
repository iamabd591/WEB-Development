<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Feadback </title>

    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'project';

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->error) {
        echo 'Error' . $conn->error;
    } else {
        $sql =  "SELECT * FROM `feadback`";
        $result = $conn->query($sql);
        echo '   <table class="table">';
        echo '     <thead class="thead-dark">';
        echo '       <tr>';
        echo '         <th scope="col">Admin Name</th>';
        echo '         <th scope="col">Assesment</th>';
        echo '         <th scope="col">Feadback</th>';
        echo '       </tr>';
        echo '     </thead>';
        if ($result->num_rows >0) {
            // echo $result->num_rows;
            echo '   <h1 style="text-align:center";>Your Feadback</h1>';
            while ($data = $result->fetch_assoc()) {
                echo '     <tbody>';
                echo '       <tr>';
                echo '        <td>';
                echo  $data["Admin Name"];
                echo '</td>';
                echo '        <td>';
                echo $data["Assesment Name"];
                echo '</td>';
                echo '        <td>';
                echo $data["Feadback"];
                echo '</td>';
                echo '       </tr>';
                echo '     </tbody>';
            }
            echo '   </table>';
        }
        else{
            echo '<h1 NO style="text-align:center";>No Feadback is here</h1>';
        }
    }
    ?>
</head>

<body>

</body>

</html>