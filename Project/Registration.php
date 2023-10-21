<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="./Teacher.css">
    <title>Teacher Registration Form | Edulogy Now</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,900&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .register {
            width: 50%;
            height: 100%;
            background: #02105a;
        }

        input {
            display: block;
            margin: 12px;
            padding: 10px;
            width: 95%;
            outline: none;
            border: none;
        }

        textarea {
            margin-left: 10px;
            display: block;
            padding: 10px;
            outline: none;
            border: none;
        }

        .register_btn {
            margin: 30px 0 0 12px;
        }



        .register_wrapper {
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #24EEE4, #366FD8, #dd3675, #E61151);

        }

        .Regisration_form {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
            width: 100%;
            height: 100%
        }

        .register_wrapper h1 {
            text-align: center;
            color: #fff;
            font-weight: 600;
            font-size: 40px;
        }

        .left_register {
            width: 50%;
            height: 2250px;
            padding: 40px;
            background: #ffffff;
        }

        .left_register h2 {
            color: #02105a;
            font-size: 22px;
            font-weight: 700;
            margin: 12px 8px;
        }

        .left_register label {
            font-weight: 800;
            font-size: 22px;
            margin-left: 20px;

        }

        .left_register label span {
            font-size: 20px;
            color: #b60000;
        }

        .left_register .input_text {
            border-bottom: 1px solid #c9c9c9;
            font-size: 18px;
            margin-bottom: 16px;
        }

        .left_register .input_text::placeholder {
            color: #02105a;
        }


        .right_register {
            width: 50%;
            height: 1250px;
            padding: 40px;
            background: linear-gradient(to right, #24EEE4, #366FD8, #dd3675, #b44593);
        }

        .right_register h2 {
            font-size: 22px;
            font-weight: 700;
            margin: 12px 8px;
            color: #fff;
        }

        .checkbox {
            display: inherit;
            width: 60px;
        }

        textarea {
            border: 2px solid #000;
        }
    </style>
</head>

<body>

    <div class="register_wrapper">
        <h1><span>Edulogy</span> Registration Form</h1>
        <div class="register_wrapper">
            <div class="Regisration_form">
                <div class="left_register">
                    <h2>Gernal Information</h2>
                    <form action="./Validate2.php" method="POST">
                        <label for="">Profile <span>*</span></label>
                        <input type="file" required name="ptofile_url">
                        <label for="">First Name <span>*</span></label>
                        <input type="text" placeholder="Enter Your First Name" required class="input_text" name="fname">

                        <label for="">Last Name <span>*</span></label>
                        <input type="text" placeholder="Enter Your Last Name" required class="input_text" name="lname">

                        <label for="">Age <span>*</span></label>
                        <input type="Number" placeholder="Enter Your Age" min="16" max="50" required class="input_text" name="age">

                        <label for="">Date of Birth <span>*</span></label>
                        <input type="date" required class="input_text" name="dob">

                        <label for="">Enter Your City<span>*</span></label>
                        <input type="text" placeholder="Enter Your City name" required class="input_text" name="city">
                        <br>

                        <label for="">Qulifaction <span>*</span></label>
                        <select required name="edu">
                            <option value="NS">--Select--</option>
                            <option value="PHD">PHD</option>
                            <option value="Master">Master</option>
                            <option value="Bacholer">Bacholer</option>
                            <option value="ADP">ADP</option>
                        </select>

                        <br>
                        <br>
                        <label for="">Graduating Institute Name <span>*</span></label>
                        <input type="text" placeholder="Enter Your Institute Name" required class="input_text" name="InsI">
                        <br>

                        <label for="">Latest Transcript (PDF Only) <span>*</span></label>
                        <input type="file" name="url">

                        <h2>Conatct Information</h2>
                        <label for="">User Name <span>*</span></label>
                        <input type="text" placeholder="Enter Your User Name" required class="input_text" name="username">

                        <label for="">Email <span>*</span></label>
                        <input type="email" placeholder="Enter Your Email" required class="input_text" name="email">

                        <label for="">Password <span>*</span></label>
                        <input type="password" placeholder="Enter Your Password" required class="input_text" name="pass">

                        <label for="">Confrim Password <span>*</span></label>
                        <input type="password" placeholder="Enter Your Confrim Password" required class="input_text" name="cpass">


                        <label for="">Phone Number <span>*</span></label>
                        <input type="text" placeholder="Enter Your Phone Number" required class="input_text" name="phone">


                        <label for="">Address <span>*</span></label>
                        <textarea name="address" id="" cols="65" rows="10" placeholder="Enetr Your Complete Address" required></textarea>

                        <br>
                        <label for=""> PDF file of Passport / Cnic <span>*</span></label>
                        <input type="file" required class="file">
                        <label><input type="checkbox" class="checkbox" required>I Read Policy <span>*</span></label>
                        <label><input type="checkbox" class="checkbox" required>I Agree Terms & Condition<span>*</span></label>
                        <input type="submit" class="btn btn-primary" value="Register">
                    </form>

                </div>

            </div>
        </div>
</body>

</html>