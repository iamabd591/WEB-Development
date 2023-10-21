<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .icon {
            font-size: 70px;
            margin-left: 75px;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'project';

    $email = $_POST['email'];
    $passwrd = $_POST['password'];

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->error) {
        echo 'Error' . $conn->error;
    } else {
        $sql = "SELECT `Username` from `teachersrecord` WHERE `Email` = '" . $email . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "user name found";
            while ($row = $result->fetch_assoc()) {
                $user = $row['Username'];
            }

            echo '<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">';
            echo ' <!-- Navbar Brand-->';
            echo '    <a class="navbar-brand ps-3" href="#">Welcome ' .  $user . '</a>';
            echo ' <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">';
            echo '    <div class="input-group">';
            echo '        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />';
            echo '       <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>';
            echo '    </div>';
            echo '</form>';

            echo ' <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">';
            echo '       <li class="nav-item dropdown">';
            echo '            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>';
            echo '            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
            echo '                <li><a class="dropdown-item" href="#!">Settings</a></li>';
            echo '                <li><a class="dropdown-item" href="#!">Activity Log</a></li>';
            echo '                <li>';
            echo '                    <hr class="dropdown-divider" />';
            echo '                </li>';
            echo '                <li><a class="dropdown-item" href="#!">Logout</a></li>';
            echo '            </ul>';
            echo '        </li>';
            echo '    </ul>';
            echo '    </nav>';
            echo '    <div id="layoutSidenav">';
            echo '        <div id="layoutSidenav_nav">';
            echo '            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">';
            echo '                <div class="sb-sidenav-menu">';
            echo '                    <div class="nav">';
            echo '                        <a class="nav-link" href="#">';
            echo '                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>';
            echo '                           Dashboard';
            echo '                        </a>';
            echo '                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">';
            echo '                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>';
            echo '                            My Account';
            echo '                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>';
            echo '                        </a>';
            echo '                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">';
            echo '                           <nav class="sb-sidenav-menu-nested nav">';
            echo '                                <a class="nav-link" href="layout-static.html">Profile</a>';
            echo '                            </nav>';
            echo '                        </div>';
            echo '                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"> ';
            echo '                           <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>';
            echo '                            My Activites';
            echo '                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>';
            echo '                        </a>';
            echo '                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">';
            echo '                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">';
            echo '                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">';
            echo '                                    Activity 1';
            echo '                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>';
            echo '                                </a>';
            echo '                               <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">';
            echo '                                   Activity 2';
            echo '                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>';
            echo '                                </a>';
            echo '                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">';
            echo '                                    Activity 3';
            echo '                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>';
            echo '                                </a>';
            echo '                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">';
            echo '                                    Activity 4';
            echo '                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>';
            echo '                                </a>';
            echo '                            </nav>';
            echo '                        </div>';
            echo '                    </div>';
            echo '               </div>';
            echo '               <div class="sb-sidenav-footer">';
            echo '                   <div class="small"> <a href="./TeacherLogin.php">Logged Out</a></div>';
            echo '               </div>';
            echo '           </nav>';
            echo '       </div>';
            echo '       <div id="layoutSidenav_content">';
            echo '           <main>';
            echo '               <div class="container-fluid px-4">';
            echo '                   <h1 class="mt-4">Dashboard</h1>';
            echo '                   <ol class="breadcrumb mb-4">';
            echo '                       <li class="breadcrumb-item active">Dashboard</li>';
            echo '                   </ol>';
            echo '                   <div class="row">';
            echo '                       <div class="col-xl-3 col-md-6">';
            echo '                           <div class="card bg-primary text-white mb-4">';
            echo '                               <div class="card-body"> <i class="bx bx-cloud-upload icon"></i></div>';
            echo '                               <div class="card-footer d-flex align-items-center justify-content-between">';
            echo '                                    <a class="small text-white stretched-link" href="./Upload.php">UploadAssesment</a>';
            echo '                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>';
            echo '                                </div>';
            echo '                            </div>';
            echo '                        </div>';
            echo '                        <div class="col-xl-3 col-md-6">';
            echo '                            <div class="card bg-warning text-white mb-4">';
            echo '                                <div class="card-body"><i class="bx bx-checkbox-checked icon"></i></div>';
            echo '                                <div class="card-footer d-flex align-items-center justify-content-between">';
            echo '                                    <a class="small text-white stretched-link" href="#">Check</a>';
            echo '                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>';
            echo '                                </div>';
            echo '                            </div>';
            echo '                        </div>';

            echo '                        <div class="col-xl-3 col-md-6">';
            echo '                            <div class="card bg-success text-white mb-4">';
            echo '                                <div class="card-body"><i class="bx bx-message-add icon"></i></div>';
            echo '                                <div class="card-footer d-flex align-items-center justify-content-between">';
            echo '                                    <a class="small text-white stretched-link" href="./CheckFeadback.php">Check Feadback </a>';
            echo '                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>';
            echo '                                </div>';
            echo '                            </div>';
            echo '                        </div>';

            echo '                        <div class="col-xl-3 col-md-6">';
            echo '                            <div class="card bg-danger text-white mb-4">';
            echo '                                <div class="card-body"><i class="bx bx-message-x icon"></i></div>';
            echo '                                <div class="card-footer d-flex align-items-center justify-content-between">';
            echo '                                    <a class="small text-white stretched-link" href="#">Delete</a>';
            echo '                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>';
            echo '                                </div>';
            echo '                            </div>';
            echo '                        </div>';
            echo '                    </div>';

            echo '                </div>';
            echo '            </main>';
            echo '            <footer class="py-4 bg-light mt-auto">';
            echo '                <div class="container-fluid px-4">';
            echo '                    <div class="d-flex align-items-center justify-content-between small">';
            echo '                        <div class="text-muted">Copyright &copy; Edulogy 2023</div>';
            echo '                        <div>';
            echo '                            <a href="#">Privacy Policy</a>';
            echo '                            &middot;';
            echo '                            <a href="#">Terms &amp; Conditions</a>';
            echo '                        </div>';
            echo '                    </div>';
            echo '                </div>';
            echo '            </footer>';
            echo '        </div>';
            echo '    </div>';
            echo '    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>';
            echo '    <script src="js/scripts.js"></script>';
            echo '    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>';
            echo '    <script src="assets/demo/chart-area-demo.js"></script>';
            echo '    <script src="assets/demo/chart-bar-demo.js"></script>';
            echo '    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>';
            echo '    <script src="js/datatables-simple-demo.js"></script>';
        } else {
            // echo $conn->error;
            // echo 'You Dont Have An Account <a Href="./Registration.php">Creatre Now </a>';
            echo ' <div id="layoutError">';
            echo ' <div id="layoutError_content">';
            echo '   <main>';
            echo '        <div class="container">';
            echo '            <div class="row justify-content-center">';
            echo '                <div class="col-lg-6">';
            echo '                    <div class="text-center mt-4">';
            echo '                        <img class="mb-4 img-error" src="./Images/404.svg" />';
            echo '                       <p class="lead">You Dont Have An Account <a Href="./Registration.php">Creatre Now</a></p>';
            echo '                       </a>';
            echo '                    </div>';
            echo '                </div>';
            echo '             </div>';
            echo '        </div>';
            echo '    </main>';
            echo ' </div>';
            echo ' <div id="layoutError_footer">';
            echo '    <footer class="py-4 bg-light mt-auto">';
            echo '        <div class="container-fluid px-4">';
            echo '            <div class="d-flex align-items-center justify-content-between small">';
            echo '                <div class="text-muted">Copyright &copy; Edulogy 2023</div>';
            echo '                <div>';
            echo '                    <a href="#">Privacy Policy</a>';
            echo '                    &middot;';
            echo '                    <a href="#">Terms &amp; Conditions</a>';
            echo '                </div>';
            echo '            </div>';
            echo '        </div>';
            echo '    </footer>';
            echo ' </div>';
            echo ' </div>';
        }
    }
    ?>
</body>

</html>