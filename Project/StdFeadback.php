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
    <style>
        *{
            text-align: center;
            background: #e0e0e0;

        }
        h1{
            font-size: 50px;
        }
        
        label{
           margin:10px;
           padding:12px,8px;
            font-weight: bold;
            font-size: 20px;
        }
        .text{
            width:450px;
            height:80px;
            outline: none;
            border:none;
            background:#fff;
            border-radius: 10px;
            font-size: 24px;
            margin:5px;
            padding: 8px;
        }
        textarea{
            background:#fff;
            border-radius: 10px;
            font-size: 24px;
            margin:5px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <form action="./feadbackThanks.php" method="POST">
        <h1 >Your Feadback</h1>
        <div><label for="">Your Admin Name</label></div>
        <div><input type="text" placeholder="Your Admin Name" name="admin_name" class="text"></div>

        <div><label for="">Your Assesment Title</label></div>
        <div><input type="text" placeholder="Your Assesment Title" name="asses_name" class="text"></div>


        <div><label for="">Enter Feadback Here</label></div>
        <div><textarea name="feadback" id="" cols="60" rows="5"></textarea></div>

        <input type="reset" value="Reset" class="btn btn-outline-danger btn-lg">
        <input type="submit" value="Submit" class="btn btn-outline-primary btn-lg">
    </form>
</body>
</html>